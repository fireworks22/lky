$(document).ready(function() {

		
		
		$(".tab li").each(function(index) {
			
			$(this).click(function(){
				$(".tab li").removeClass("getfor");
				$(this).addClass("getfor");
				$(".taba li").eq(index).show().siblings().hide();
				})
            
        });
	
	
});// JavaScript Document