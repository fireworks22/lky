/**
 * Created by Administrator on 2016/11/29 0029.
 */
var dis= document.getElementsByClassName("disabled");
for(var i=0; i<dis.length; ++i){
    var a = dis[i].getElementsByTagName('a')[0];
    a.disabled = true;
    a.href = "#";

}