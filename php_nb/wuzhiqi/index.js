var player = [];
var com = [];
window.onload = function(){
	window.n = 0;
	for (var i=0; i<$.cls("div").length; ++i) {
		$.cls("div")[i].id = (i%15+1)+"_"+(Math.floor(i/15)+1);//添加id 相当于这里的坐标，前面的为x 后面的为y

		$.cls("div")[i].addEventListener("mouseover", function(){//鼠标移上显示红框
			if (this.style.background == "")
				this.style.background = "url(./hand.png)";
		});
		$.cls("div")[i].addEventListener("mouseout", function(){//鼠标移出
			if (this.style.background == "url(\"./hand.png\")")
				this.style.background = "";
		});

		$.cls("div")[i].addEventListener("click", function(){//鼠标点击显示棋子
			if (this.style.background == "url(\"./hand.png\")" && !window.n){
				this.style.background = "url(./bai.png)";
				var arr = this.id.split('_');
				player.push([Number(arr[0]), Number(arr[1])]);
				var f = five(Number(arr[0]), Number(arr[1]), "bai", "hei");
				if (f[0][0]>=5 || f[1][0]>=5 || f[2][0]>=5 || f[3][0]>=5) {
					alert("恭喜你，你赢了！");
					window.n++;
					return;
				}

				computer();
			}
		});
	}

	function set_color(arr){
		var div = document.getElementById(arr[0]+"_"+arr[1]);
		div.style.background = "url(./hei.png)";
		var her = five(Number(arr[0]), Number(arr[1]), "hei", "bai");
				if (her[0][0]>=5 || her[1][0]>=5 || her[2][0]>=5 || her[3][0]>=5) {
					alert("很遗憾，你输了！");
					window.n++;
					return;
				}
	}

	function five(x, y, color, c2){
		var re = new Array();
		var tmp = new Array();
		var a=1, b=1, c=1, d=1;//分别代表水平、垂直、左斜、右斜
		//水平判断(向右)
		for(var i=x+1; i<=15; i++){
			if(is_color(i+"_"+y,color)) a++;
			else if(!is_color(i+"_"+y,c2)){
				tmp.push([i, y]);
				break;
			}else break;
		}
		//水平判断(向左)
		for(var i=x-1; i>0; i--){
			if(is_color(i+"_"+y,color)) a++;
			else if(!is_color(i+"_"+y,c2)){
				tmp.push([i, y]);
				break;
			}else break;
		}
		
		re.push([a, tmp]);

		tmp = [];
		
		//垂直判断(向下)
		for(var j=y+1; j<=15; j++){
			if(is_color(x+"_"+j,color)) b++;
			else if(!is_color(x+"_"+j,c2)){
				tmp.push([x, j]);
				break;
			}else break;
		}
		//垂直判断(向下)
		for(var j=y-1; j>0; j--){
			if(is_color(x+"_"+j,color)) b++;
			else if(!is_color(x+"_"+j,c2)){
				tmp.push([x, j]);
				break;
			}else break;
		}

		re.push([b, tmp]);

		tmp=[];

		//右斜判断(向下)
		for(var i=x-1,j=y+1; i>0 && j<=15; i--,j++){
			if(is_color(i+"_"+j,color)) c++;
			else if(!is_color(i+"_"+j,c2)){
				tmp.push([i, j]);
				break;
			}else break;
		}
		//右斜判断(向上)
		for(var i=x+1,j=y-1; i<=15 && j>0; i++,j--){
			if(is_color(i+"_"+j,color)) c++;
			else if(!is_color(i+"_"+j,c2)){
				tmp.push([i, j]);
				break;
			}else break;
		}
		re.push([c, tmp]);

		tmp=[];


		//左斜判断(向上)
		for (var i=x+1,j=y+1; i<=15 && j<=15; i++,j++) {
			if (is_color(i+"_"+j, color)) d++;
			else if(!is_color(i+"_"+j,c2)){
				tmp.push([i, j]);
				break;
			}else break;
		}
		//左斜判断(向下)
		for (var i=x-1,j=y-1; i>0 && j>0; i--,j--) {
			if (is_color(i+"_"+j, color)) d++;
			else if(!is_color(i+"_"+j,c2)){
				tmp.push([i, j]);
				break;
			}else break;
		}

		re.push([d, tmp]);

		re.sort(function(a, b){
			if(a[0] > b[0]){
				return a[1].length ? -1 : 1;
			}else if(a[0] < b[0]){
				return b[1].length ? 1 : -1;
			}else{
				return a[1].length > b[1].length ? -1 : 1;
			}
		});

		return re;
		/*if (a>=5 || b>=5 || c>=5 || d>=5) return true;
			else return false;*/
	}

	//判断背景是否为传入的颜色
	function is_color(id, color){
		if ($.id(id).style.background.indexOf(color)>0)
			return true;
		else
			return false;
	}

	//电脑
	function computer(){
		if(player.length == 1){
			com.push([player[0][0], player[0][1]+1]);
			set_color(com[com.length-1]);
		}else{
			var p = five(player[player.length-1][0], player[player.length-1][1], "bai", "hei");

			var fenxi1 = p[0][1].concat(p[1][1], p[2][1], p[3][1]);
			var in1 = p[0];
			var zuobiao1 = false;
			for(var i=0; i<fenxi1.length; ++i){
				player.push(fenxi1[i]);
				var tmp = five(player[player.length-1][0], player[player.length-1][1], "bai", "hei");
				if(tmp[0][0] > in1[0]){
					in1 = tmp[0];
					zuobiao1 = fenxi1[i];
				}
				player.splice(player.length-1, 1);
			}


			var c = five(com[com.length-1][0], com[com.length-1][1], "hei", "bai");

			var fenxi2 = c[0][1].concat(c[1][1], c[2][1], c[3][1]);
			var in2 = p[0];
			var zuobiao2 = false;
			for(var i=0; i<fenxi2.length; ++i){
				com.push(fenxi2[i]);
				var tmp = five(com[com.length-1][0], com[com.length-1][1], "hei", "bai");
				if(tmp[0][0] > in2[0]){
					in2 = tmp[0];
					zuobiao2 = fenxi2[i];
				}
				com.splice(com.length-1, 1);
			}

			if(zuobiao1 && zuobiao2){
				if(in1[0] > in2[0]){
					com.push(zuobiao1);
				}else{
					com.push(zuobiao2);
				}
			}else if(zuobiao1){
				if(in1[0] > c[0][0]){
					com.push(zuobiao1);
				}else{
					com.push(c[0][1][0]);
				}
			}else if(zuobiao2){
				if(p[0][0] > in2[0]){
					com.push(p[0][1][0]);
				}else{
					com.push(zuobiao2);
				}
			}else{

				if(p[0][0] > c[0][0]){
					if(p[0][1].length){
						var index = p[0][1];
					}else{
						var index = c[0][1];
					}
					com.push(index[0]);
				}else{
					var index = c[0][1];
					com.push(index[0]);
				}

			}

			set_color(com[com.length-1]);
		}
	}
}
