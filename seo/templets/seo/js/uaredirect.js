	// 手机适配
function uaredirect(murl){	

	if(/AppleWebKit.*Mobile/i.test(navigator.userAgent) || (/MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/.test(navigator.userAgent))){  
		  if(window.location.href.indexOf("?mobile")<0){
			try{
				if(/Android|Windows Phone|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)){
					if(murl.indexOf("fromapp") > 0){//判断是否来源于电脑版
						var murl=murl.replace("m.","");
						window.location.href=murl;
					}else{
						window.location.href=murl;
					}
				}
			}catch(e){}
		}
	}
}


