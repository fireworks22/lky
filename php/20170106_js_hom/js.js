var h2 = document.getElementsByTagName("h2");
var child = document.getElementsByClassName("child");
for(var i=0; i<h2.length; i++){
    h2[i].onmouseover = function(){
        for(var j=0; j<child.length; j++){
            child[j].style.display = "none";
        }
        this.nextElementSibling.style.display = "block";
        for(var j=0; j<h2.length; j++){
            h2[j].style.background = "yellow"
        }
        this.style.background = "yellowgreen";
    }
}
