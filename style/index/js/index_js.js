$(document).ready(function(){
	var flag = 0;
	var down_cla = $('.down_cla');
	down_cla.addClass("glyphicon glyphicon-chevron-up");
	var content_border = $('.content_border');  //这里的content_border就是一个对象数组了。
	var hide_content  = $('.hide_content');
	var class_border = $('.class_border');
	var protype = $('.protype');
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























	//*点击第一个活动,动态显示“具体介绍”，“我要报名”，“到这里去”这3个按钮
	function show_button2(){
		second.css("height","120px");
		second.children().show();	
	}
	
	//动态隐藏“具体介绍”，“我要报名”，“到这里去”这3个按钮
	function hide_button2(){
		second.css("height","80px");
		hide_content.hide();
		
	}
	//鼠标点击，显示按钮事件
	second.click(function(){
		show_button2();
	});

	//鼠标移出，隐藏按钮事件
	forth.mouseout(function(){
		hide_button2();
	});
 //*结束*/


 


 






})