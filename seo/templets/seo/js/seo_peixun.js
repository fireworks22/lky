// JavaScript Document
$(function(){	
	//
	$(".zg_banci_nr div").hover(function(){
		$(this).addClass("hover")
	},function(){
		$(this).removeClass("hover")
	})
	//
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

	$(".zg_youshi_nr .ysbt").hover(function(){
		$(this).next().show()
		$(".zg_youshi_nr .ten").addClass()
	},function(){
		$(this).next().hide()
		$(".zg_youshi_nr .ten").removeClass("on")
	})
})

jQuery(".zg_shizi").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:4,pnLoop:true});
jQuery(".zg_xyty_let").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:4,pnLoop:true});