function _$(ele){
    if(ele.charAt(0) == "#"){
        return document.querySelector(ele); //object
    }else{
        return document.querySelectorAll(ele); //集合
    }
}


var li = document.createElement("li");
var p = document.createElement("p");
var span = document.createElement("span");
p.innerText = "hh";
var ul = _$("#ul");
console.log(ul);
console.log(li);
li.appendChild(p);
//span.appendChild(p);
span.style.color = "red";
ul.appendChild(li);
//ul.removeChild(_$("ul li")); // 删除子节点
//ul.replaceChild(span, _$("#ul li"));//替换子节点
//ul.replaceChild(span, _$("#ul li"));
/*var listCon = document.getElementById("listCon");
var add = document.getElementById("add");
var table = document.getElementById("table");
var tbody = document.querySelector("#tbody");
console.log(tbody);
var data = [
    [true, "温习知识"],
    [false, "预习知识"]
];
function createToDo(todo) {
    var tr = document.createElement("tr");
    var td1 = document.createElement("td");
    var td2 = document.createElement("td");
    var td3 = document.createElement("td");
    if(todo[0] == true){//完成任务
        var i = document.createElement("i");
        i.className = "glyphicon glyphicon-ok";
        td1.appendChild(i);
        td2.innerText = todo[1];
        td2.className = "text-line";
    }else{//没完成
        var input = document.createElement("input");
        input.setAttribute("type", "checkbox");
        td1.appendChild(input);
    }

    tr.appendChild(td1);
    tr.appendChild(td2);
    tr.appendChild(td3);
    tbody.appendChild(tr);
}*/

var tbody = document.getElementById("tbody");
var data = [];
function createStu(){
    var add = document.getElementById("add");

    add.onclick = function(){
        createE()
    };
}
createStu();

/**
 * 创建元素
 */
function createE(){

    var flag = 1; // 1表示的是保存，0表示的是修改
    //创建tr
    var tr = document.createElement("tr");
    var tds = [];
    var btns = []; // 存放btn的

    //创建td
    for(var i=0; i<4; i++){
        var td = document.createElement("td");
        td.setAttribute("contenteditable", true);
        tds.push(td);
        tr.appendChild(td);
    }
    tds[3].setAttribute("contenteditable", false);
    //创建两个btn
    for(var i=0; i<2; i++){
        var btn = document.createElement("input");
        btn.setAttribute("type", "button");
        btns.push(btn);
        tds[3].appendChild(btn);
    }
//                console.log(td[3]);
    btns[0].className = "btn btn-sm btn-primary";
    btns[0].value = "保存";
    btns[1].className = "btn btn-sm btn-danger";
    btns[1].value = "删除";
    tbody.appendChild(tr);

    //修改或者删除
    btns[0].onclick = function(){
        var id = tds[0].innerText;
        var name = tds[1].innerText;
        var age = tds[2].innerText;
        var arr = [id, name, age];
        data.push(arr);

        var tdx = this.parentNode.parentNode.childNodes;

        if(flag == 1){
            for(var i=0; i<tdx.length; i++){
                tdx[i].setAttribute("contenteditable", false)
            }
            this.value = "修改";
            flag = 0;
        }else{
            for(var i=0; i<tdx.length-1; i++){
                tdx[i].setAttribute("contenteditable", true)
            }
            this.value = "保存";
            flag = 1;
        }
    }
}

