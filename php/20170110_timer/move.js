function getStyle(obj, name) {
    if (obj.currentStyle) {
        return obj.currentStyle[name];
    }
    else {
        return getComputedStyle(obj, false)[name];
    }
}


//注意：在多物体运动框架中，所有东西都不能公用 ！否则出问题，BUG；将必要的变量加到物体的属性中就行。即：属性与运动对象绑定：速度、其他属性值（如透明度等等）
function startMove(obj, json, fnEnd)//完美运动框架//换为json，如：startMove(oDiv, {width: 400, height: 400})
{
    clearInterval(obj.timer);
    obj.timer = setInterval(function () {

        var bStop = true;   //关键 //假设：所有的值都已经到了


        for (var attr in json) //用一个循环，把原来的那套东西包在里面，每次定时器执行的时候，都会循环，循环的次数取决于json里面写了什么
        {

            var cur = 0;

            if (attr == 'opacity') {
                cur = Math.round(parseFloat(getStyle(obj, attr)) * 100); //因为这里，会出问题，小数
            } else {
                cur = parseInt(getStyle(obj, attr));
            }

            var speed = (json[attr] - cur) / 6;

            speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);

            if (cur != json[attr])
                bStop = false;

            if (attr == 'opacity') {
                obj.style.filter = 'alpha(opacity:' + (cur + speed) + ')';
                obj.style.opacity = (cur + speed) / 100;

            }
            else {
                obj.style[attr] = cur + speed + 'px';
            }

        }


        if (bStop){//如果所有的值都到了，关闭定时器

            clearInterval(obj.timer);

            if (fnEnd) fnEnd();
        }

    }, 30);
}