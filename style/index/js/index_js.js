$(document).ready(function(){

	var down_cla = $('.down_cla');
	var content_border = $('.content_border');
	var hide_content  = $('.hide_content');
	var class_border = $('.class_border');
	var  first = $('#1');
	var second = $('#2');
	var third = $('#3');
	var forth = $('#4');


	//动态显示“具体介绍”，“我要报名”，“到这里去”这3个按钮
	function show_button(){
		content_border.css("height","120px");
		hide_content.show();	
	}
	
	//动态隐藏“具体介绍”，“我要报名”，“到这里去”这3个按钮
	function hide_button(){
		content_border.css("height","80px");
		hide_content.hide();
	}
	//鼠标点击，显示按钮事件
	content_border.click(function(){
		show_button();
	});

	//鼠标移出，隐藏按钮事件
	content_border.click(function(){
		hide_button();
	});

 
  
   	function content_down(){
   		content_border.slideDown("fast");
   		down_cla.children().removeClass("glyphicon glyphicon-chevron-down");
   		down_cla.children().addClass("glyphicon glyphicon-chevron-up");
   }

   function content_up(){
   		content_border.slideUp("fast");
   		down_cla.children().removeClass("glyphicon glyphicon-chevron-up");
   		down_cla.children().addClass("glyphicon glyphicon-chevron-down");
    }

 var flag = 0;
 	$("#1").click(function(){

 	if(flag ==0){
 		content_down();
   		flag =1;
 		
 	} else {
 		content_up();
 		flag =0;

 	}
 });

 	$("#3").click(function(){

 	if(flag ==0){
 		content_down();
   		flag =1;
 		
 	} else {
 		content_up();
 		flag =0;

 	}
 });


})