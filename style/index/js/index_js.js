$(document).ready(function(){
	var flag = 0;
	var down_cla = $('.down_cla');
	down_cla.addClass("glyphicon glyphicon-chevron-up");
	var content_border = $('.content_border');  //这里的content_border就是一个对象数组了。
	var hide_content  = $('.hide_content');
	var class_border = $('.class_border');
	var protype = $('.protype');
	var ac_intro = $('.ac_introduction');
	var login_btn = $('#login_btn');
	var username = $('.username');
	//console.log(typeof content_border);
	//console.log(content_border.eq(0));

	//这是动态显示按钮的函数
	content_border.click(function(){
			$(this).children('.hide_content').css("display","inline");
			$(this).css("height","120px");
		//cbArr[0].find("button").eq(i).css("display","inline");}
	});


	//这是点击“比赛”等标签，下面内容浮动函数
	
	protype.click(function(){
		if(flag == 0){

			$(this).parent().children('.content_border').slideUp("fast");
			$(this).children('.down_cla').removeClass("glyphicon glyphicon-chevron-up");
   			$(this).children('.down_cla').addClass("glyphicon glyphicon-chevron-down");

			flag = 1;
		}else{
			$(this).parent().children('.content_border').slideDown("fast");
		    $(this).children('.down_cla').removeClass("glyphicon glyphicon-chevron-down");
   			$(this).children('.down_cla').addClass("glyphicon glyphicon-chevron-up");
			flag = 0;
		}
	});
/*$("div[href^= "#"])

 //*结束*/

 	ac_intro.children().click(function(){
 		location.href = "http://localhost/activity/index.php?/index/index/ac_introduction";
 	});
 	login_btn.click(function(){
 		location.href = "http://localhost/activity/index.php?/land/index";
 	});
 
    username.click(function(){
    	if(confirm("确定注销吗？")){
    		return true;

    	}
    	else{
    		return false;
    	}
    });






})