<?php
$z[0]=Array("global","",236,264);
$z[0][4]['name']="cfg_soft_lang";
$z[1]=Array("global","",277,303);
$z[1][4]['name']="cfg_webname";
$z[2]=Array("global","",347,377);
$z[2][4]['name']="cfg_description";
$z[3]=Array("global","",414,441);
$z[3][4]['name']="cfg_keywords";
$z[4]=Array("global","",459,491);
$z[4][4]['name']="cfg_templets_skin";
$z[5]=Array("global","",621,649);
$z[5][4]['name']="cfg_mobileurl";
$z[6]=Array("global","",1128,1156);
$z[6][4]['name']="cfg_mobileurl";
$z[7]=Array("global","",1302,1327);
$z[7][4]['name']="cfg_cmsurl";
$z[8]=Array("global","",1419,1445);
$z[8][4]['name']="cfg_cmspath";
$z[9]=Array("global","",1532,1564);
$z[9][4]['name']="cfg_templets_skin";
$z[10]=Array("global","",2146,2172);
$z[10][4]['name']="cfg_cmspath";
$z[11]=Array("include","",2275,2310);
$z[11][4]['filename']="head.htm";
$z[12]=Array("arclist","\r\n    <h2><a href=\"[field:arcurl/]\">[field:title/]</a></h2>\r\n    <p>[field:info/]...<a href=\"[field:arcurl/]\">[�鿴ȫ��]</a></p>\r\n    ",2455,2653);
$z[12][4]['flag']="h";
$z[12][4]['limit']="0,1";
$z[12][4]['infolen']="230";
$z[13]=Array("arclist","\r\n    <div class='d1arc'><a href=\"[field:arcurl/]\">[field:title/]</a></div>\r\n    ",2704,2835);
$z[13][4]['flag']="h";
$z[13][4]['limit']="1,4";
$z[14]=Array("arclist","\r\n    <li><a href=\"[field:arcurl/]\">[field:title/]</a></li>\r\n    ",2954,3078);
$z[14][4]['row']="14";
$z[14][4]['titlelen']="32";
$z[14][4]['noflag']="h";
$z[15]=Array("arclist","\r\nlinkarr[[field:global.autoindex/]] = \"[field:arcurl/]\";\r\npicarr[[field:global.autoindex/]]  = \"[field:litpic/]\";\r\ntextarr[[field:global.autoindex/]] = \"[field:title function='html2text(@me)'/]\";\r\n",3637,3881);
$z[15][4]['flag']="f";
$z[15][4]['row']="5";
$z[16]=Array("global","",4455,4485);
$z[16][4]['name']="cfg_templeturl";
$z[17]=Array("global","",4816,4846);
$z[17][4]['name']="cfg_templeturl";
$z[18]=Array("arclist","\r\n      <li><span>[field:pubdate function=\"MyDate('m-d',@me)\"/]</span><a href=\"[field:arcurl/]\">[field:title/]</a></li>\r\n      ",5415,5606);
$z[18][4]['flag']="a";
$z[18][4]['row']="6";
$z[18][4]['orderby']="pubdate";
$z[19]=Array("arclist","\r\n        <li><a href=\"[field:arcurl/]\">[field:image/]<span class=\"title\">[field:title/]</span></a></li>\r\n        ",5908,6119);
$z[19][4]['row']="10";
$z[19][4]['orderby']="pubdate";
$z[19][4]['type']="image.";
$z[19][4]['imgwidth']="143";
$z[19][4]['imgheight']="106";
$z[20]=Array("mda","",6238,6263);
$z[20][4]['name']="700x90";
$z[21]=Array("channelartlist","\r\n   <dl class=\"tbox\">\r\n    <dt><strong><a href=\"{dede:field name='typeurl'/}\">{dede:field name='typename'/}</a></strong><span class=\"more\"><a href=\"{dede:field name='typeurl'/}\">����...</a></span></dt>\r\n    <dd>\r\n     <ul class=\"d1 ico3\">\r\n      {dede:arclist titlelen='60' row='8'}\r\n      <li><span>[field:pubdate function=\"MyDate('m-d',@me)\"/]</span><a href=\"[field:arcurl /]\">[field:title /]</a></li>\r\n      {/dede:arclist}\r\n     </ul>\r\n    </dd>\r\n   </dl>\r\n   ",6316,6824);
$z[22]=Array("arclist","\r\n      <li> <a href=\"[field:arcurl/]\">[field:title/]</a> <span><small>���:</small>[field:click/]</span> <span><small>����:</small>[field:scores/]</span></li>\r\n      ",7257,7504);
$z[22][4]['orderby']="scores";
$z[22][4]['row']="8";
$z[22][4]['subday']="30";
$z[22][4]['titlelen']="42";
$z[23]=Array("feedback","\r\n      <li> <small><a href=\"#\" class=\"username\">[field:username function=\"(@me=='guest' ? '�ο�' : @me)\"/]</a> ���� <a href=\"[field:global.cfg_phpurl/]/feedback.php?aid=[field:aid/]\" class=\"title\">[field:title/]</a></small>\r\n       <p>[field:msg/]</p>\r\n      </li>\r\n      ",7606,7945);
$z[23][4]['row']="5";
$z[23][4]['titlelen']="24";
$z[23][4]['infolen']="80";
$z[24]=Array("global","",8119,8147);
$z[24][4]['name']="cfg_memberurl";
$z[25]=Array("php","\r\n        if(preg_match(\"#2#\", \$safe_gdopen))\r\n        {\r\n        echo '\r\n        <div class=\"fb\"><span>��֤��:</span>\r\n         <input type=\"text\" name=\"vdcode\" size=\"8\" class=\"ipt-txt\" />\r\n         <img id=\"vdimgck\" align=\"absmiddle\" onClick=\"this.src=this.src+\\'?\\'\" style=\"cursor:pointer;margin-left:0px;text-transform:uppercase;\" alt=\"�����壿�������\" src=\"'.\$cfg_cmspath.'/include/vdimgck.php\"/></div>\r\n        ';\r\n        }\r\n        ",8637,9099);
$z[26]=Array("global","",9209,9237);
$z[26][4]['name']="cfg_memberurl";
$z[27]=Array("global","",9299,9327);
$z[27][4]['name']="cfg_memberurl";
$z[28]=Array("memberlist","\r\n       <li><a href=\"[field:spaceurl/]\" target=\"_blank\"><img src=\"[field:face/]\" alt='[field:spacename/]' width=\"52\" height=\"52\" />[field:uname/]</a></li>\r\n       ",9614,9830);
$z[28][4]['row']="6";
$z[28][4]['signlen']="30";
$z[29]=Array("mda","",10012,10042);
$z[29][4]['name']="250x250_SSP";
$z[30]=Array("arclist","\r\n      <li class='dotline'><a href=\"[field:arcurl/]\">[field:title/]</a></li>\r\n      ",10218,10391);
$z[30][4]['flag']="c";
$z[30][4]['titlelen']="42";
$z[30][4]['row']="16";
$z[30][4]['tagid']="dedecms";
$z[30][4]['pagesize']="8";
$z[31]=Array("mda","",10503,10529);
$z[31][4]['name']="250x250";
$z[32]=Array("arclist","\r\n      <li class='dotline'><a href=\"[field:arcurl/]\">[field:title/]</a></li>\r\n      ",10701,10856);
$z[32][4]['sort']="hot";
$z[32][4]['subday']="30";
$z[32][4]['titlelen']="42";
$z[32][4]['row']="6";
$z[33]=Array("global","",11048,11073);
$z[33][4]['name']="cfg_cmsurl";
$z[34]=Array("qrcode","",11146,11160);
$z[35]=Array("flinktype","\r\n			<a href=\"#\" _for=\"flink_[field:id/]\">[field:typename/]</a> \r\n		",11323,11439);
$z[35][4]['type']="dedecms";
$z[36]=Array("flinktype","\r\n  <dd id=\"flink_[field:id/]\">\r\n    <ul class=\"f5\">\r\n		{dede:flink/}\r\n    </ul>\r\n  </dd>\r\n  ",11571,11712);
$z[36][4]['type']="dedecms";
$z[37]=Array("mda","",11802,11827);
$z[37][4]['name']="728x90";
$z[38]=Array("include","",11835,11872);
$z[38][4]['filename']="footer.htm";

?>