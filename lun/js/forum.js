$(function () {
    $('#text').focus(function () {
        $('#text-put ').css("display","block");
    });
    $('#text').blur(function () {

        $('#text-put ').css("display","none");
    });

    $(".aw-popover img").mouseover(function(e){
        var offset = $(this).offset();
        console.log(offset.top, offset.left);
        console.log(e.clientX, e.clientY);
        $("#aw-tool").show().css({
            position: "absolute",
            top: offset.top+30,
            left: offset.left
        });
    });
    $(".aw-popover img").mouseout(function(e){
        var offset = $(this).offset();
        $("#aw-tool").show().css({
            position: "absolute",
            display: "none"
        });
    });
    $("#aw-tool").mouseover(function () {
        $('#aw-tool ').css("display","block");
    });
    $("#aw-tool").mouseout(function () {
        $('#aw-tool ').css("display","none");
    });
    $(".aw-pop img").mouseover(function(e){
        var offset = $(this).offset();
        console.log(offset.top, offset.left);
        console.log(e.clientX, e.clientY);
        $("#aw-tool2").show().css({
            position: "absolute",
            top: offset.top+30,
            left: offset.left
        });
    });
    $(".aw-pop img").mouseout(function(e){
        var offset = $(this).offset();
        $("#aw-tool2").show().css({
            position: "absolute",
            display: "none"
        });
    });
    $("#aw-tool2").mouseover(function () {
        $('#aw-tool2 ').css("display","block");
    });
    $("#aw-tool2").mouseout(function () {
        $('#aw-tool2 ').css("display","none");
    });
    $(".tc-popover").mouseover(function(e){
        var offset = $(this).offset();
        console.log(offset.top, offset.left);
        console.log(e.clientX, e.clientY);
        $("#topic-tool").show().css({
            position: "absolute",
            top: offset.top+20,
            left: offset.left
        });
    });
    $(".tc-popover").mouseout(function(e){
        var offset = $(this).offset();
        $("#topic-tool").show().css({
            position: "absolute",
            display: "none"
        });
    });
    $("#topic-tool").mouseover(function () {
        $('#topic-tool').css("display","block");
    });
    $("#topic-tool").mouseout(function () {
        $('#topic-tool').css("display","none");
    });

});
