// JavaScript Document
$(function(){
	//��������
	$(".zg_ser .eTxt").click(function(){
		$(this).addClass("active")
	})
	$(document).click(function(event){ 
        if($(".eTxt").is(":visible")){
            if($(".eTxt").val().length<=0){
                var target=$(event.target)
                if(target.closest(".zg_ser").length==0){
                    $(".eTxt").removeClass("active")
                }
            }
        }                                     
    });
	
	$(".fixBtnOpen").click(function(){
		$(".indexFix").stop().animate({right:0},500);
		//$(".fixBtnOpen").addClass("fixBtnClose");
		$(".fixBtnOpen").hide();
		$(".fixBtnClose").show();
	});
	$(".fixBtnClose").click(function(){
		$(".fixBtnOpen").show();
		$(".fixBtnClose").hide();
		$(".indexFix").animate({right:-162},500);
	});	
	
	//ͷ��΢��
	$(".zg_top_ewm li").each(function() {
        $(this).hover(function(){
			$(this).addClass("hover");
			$(this).children("p").show();
		},function(){
			$(this).removeClass("hover");
			$(this).children("p").hide();
		})
    });
	//
	$(".zg_ma_let_bot").hover(function(){
		$(this).addClass("hover");
	},function(){
		$(this).removeClass("hover");
	})
	//���·����л�
	$(".zg_ma_ret h2 a").each(function(c) {
        $(this).hover(function(){
			$(".zg_ma_ret h2 a").removeClass("hover");
			$(this).addClass("hover");
			$(".zg_ma_ret_cont").hide();
			$(".zg_ma_ret_cont:eq("+c+")").show();
		})
    });
	//���·�������
	$(".zg_ma_ret_cont .ret_nr").hover(function(){
		$(this).addClass("ret_on");
	},function(){
		$(this).removeClass("ret_on");
	})

	//ͷ������
	var topMain=$(".zg_top").height();
	var nav=$(".zg_topbox");
	$(window).scroll(function(){
		if ($(window).scrollTop()>topMain){
			nav.addClass("zg_topbk");
		}
		else{
			nav.removeClass("zg_topbk");
		}
	});
	
})

jQuery(".scrollBox").slide({ titCell:".list li", mainCell:".piclist", effect:"leftLoop",vis:1,scroll:1,delayTime:800,autoPlay:true,trigger:"click",easing:"easeOutCirc"});


