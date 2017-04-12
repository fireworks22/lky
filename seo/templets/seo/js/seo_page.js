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
	//dl����
	$(".zg_main02_c dl,.zg_classbd dd").hover(function(){
		$(this).addClass("on");	
	},function(){
		$(this).removeClass("on");	
	});
	
	$(".soInput").focus(function(){
		$(this).parents(".zg_soso").addClass("zg_soso_cur");
	});
	$(".soInput").blur(function(){
		$(this).parents(".zg_soso").removeClass("zg_soso_cur");
	})
	$(".zg_publicId li").hover(function(){
		$(this).addClass("on");
		$(this).find(".zg_drop").show();	
	},function(){
		$(this).removeClass("on");
		$(this).find(".zg_drop").hide();		
	})
	//��Ҫ����
	$(".soInput,.askInpt").each(function(){  
		var txt = $(this).val();  
		$(this).focus(function(){  
		if(txt === $(this).val()) $(this).val("");  
		}).blur(function(){  
		if($(this).val() == "") $(this).val(txt);  
		});  
	});
	//���ű�ǩ��ɫ��ʽ
	var itmNum = $("#tagscloud a").length;
	var arr= ['tagc1','tagc2','tagc3','tagc4','tagc5'];
	for(var i=0;i<itmNum;i++){
		var b = arr[i%arr.length];
		$("#tagscloud a").each(function(i) {
            $(this).addClass(arr[i%arr.length]);
        });
	}

	//���·�����������
	$(".zg_sharebar .collect").hover(function(){
		$(this).addClass("collect_on");
	},function(){
		$(this).removeClass("collect_on");	
	});
	$(".zg_sharebar .zan").hover(function(){
		$(this).addClass("zan_on");
	},function(){
		$(this).removeClass("zan_on");	
	});
	
	//seo��ѵ��ҳjs
	$("#top").click(function(){$("html,body").animate({scrollTop:"0px"},800);})
	$(".c2_h").each(function(){
		$(this).mousemove(function(){
			$(this).children("span").show();
			$(this).children("p").show();
		}).mouseout(function(){
			$(this).children("span").hide();
			$(this).children("p").hide();
		})
	
	})
	//���ж�ʱ���
	setTimeout("$('.offcnTqFix').show()",500);
		$("#offcnCloseFix").click(function(){
			$('.offcnTqFix').hide();
	});
	$(".close_fix").click(function(){
		$('.offcnTqFix').hide();
	});
	//���ƻ���
	$(".bg01").hover(function(){
		$(this).addClass("bg01h")	
	},function(){
		$(this).removeClass("bg01h")	
	});
	$(".bg02").hover(function(){
		$(this).addClass("bg02h")	
	},function(){
		$(this).removeClass("bg02h")	
	});
	$(".bg03").hover(function(){
		$(this).addClass("bg03h")	
	},function(){
		$(this).removeClass("bg03h")	
	});
	$(".bg04").hover(function(){
		$(this).addClass("bg04h")	
	},function(){
		$(this).removeClass("bg04h")	
	});
	$(".bg05").hover(function(){
		$(this).addClass("bg05h")	
	},function(){
		$(this).removeClass("bg05h")	
	});
	//fix-��ѯ����
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
	//fix-�ײ��������
	$(".zg_adBtm .close").click(function(){
		$(".zg_adBtm .adbg,.zg_adBtm").animate({"width":"180px"},200);
		$(".zg_adBtm").css("background","none");
	});
	//���е���15�뵯��һ��
	setInterval(function(){
		$(".zg_popBox").show();
	},15000);
	//�ر�
	$(".zg_popBox .close").click(function(){
			$(".zg_popBox").hide();
	});	


	//��ϵ�����л�
	$(".adree_nav span").each(function(c) {
        $(this).click(function(){
			$(".adree_nav span").removeClass("click");
			$(this).addClass("click");
			$(".quyu").hide();
			$(".quyu:eq("+c+")").show();
		})
    });


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
	//�б��ҳ
	 $(".select_txt,.selet_open").hover(function(event){   
		//event.stopPropagation();
		$(".option").hide();
		$(this).siblings(".option").show();
		$(".select_box").removeClass("uiChooseActiveS");
		$(this).parent(".select_box").addClass("uiChooseActiveS");
	});

	$(document).click(function(event){
		var eo=$(event.target);
		if($(".select_box").is(":visible") && eo.attr("class")!="option" && !eo.parent(".option").length)
		$('.option').hide();
		$(".select_box").removeClass("uiChooseActiveS");									  
	});

	/*��ֵ���ı���*/
	$(".option a").click(function(){
		var value=$(this).text();
		$(this).parent().siblings(".select_txt").text(value);
		$(".select_value").val(value);
		$(".option").hide();	
		$(".select_box").removeClass("uiChooseActiveS");
	 })

	$(".option").each(function(d) {
        var optionSize=6;
		 var optionLiHeight=$(".option a").height();
		 var optionVarS=$(this).find("a").length;
		 if(optionVarS>optionSize){
			var optionSheight=270;
			$(this).height(optionSheight);
		}else{
			 var optionLiTal=optionVarS*optionLiHeight;
			$(this).height(optionLiTal);	
		};
    });
	$(".option,.uiChooseTable,.mod_select ").mouseleave(function(){
		$(".select_box").removeClass("uiChooseActiveS");
		$(".option").hide();
	});

})


//�����ղ�
	function AddFavorite(sURL, sTitle)
	{
		try
		{
			window.external.addFavorite(sURL, sTitle);
		}
		catch (e)
		{
			try
			{
				window.sidebar.addPanel(sTitle, sURL, "");
			}
			catch (e)
			{
				alert("�����ղ�ʧ�ܣ���ʹ��Ctrl+D�������");
			}
		}
	}
	
	//�ղؼ���
	function jishu(id,mid,jtype)
	{
		$.getJSON("http://www.ujiuye.com/api.php?op=jishu&a=1&id="+id+"&modelid="+mid+"&jtype="+jtype+"&callback=?",function(data){
			if(jtype==1){
				$('#shoucs').html(data.num);
			}
			if(jtype==2){
				$('.zanNums').html(data.num);
			}
		});
	
	}
	

$(function(){
	 $("#search a").click(function(){
		 var searchid = $(this).attr("id");
		   //alert(searchid);
		  SearchUi(searchid);
	 })
})
