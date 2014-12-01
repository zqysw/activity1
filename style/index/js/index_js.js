$(document).ready(function(){

	var down_cla1 = $('.down_cla1');
	var down_cla3 = $('.down_cla3');
	var content_border = $('.content_border');
	var hide_content  = $('.hide_content');
	var class_border = $('.class_border');
	var  first = $('#1');
	var second = $('#2');
	var third = $('#3');
	var forth = $('#4');


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
 //*结束

	//*点击第二个活动,动态显示“具体介绍”，“我要报名”，“到这里去”这3个按钮
	function show_button4(){
		forth.css("height","120px");
		getElementById("#4").getElementsByTagName(".hide_content").show();	
	}
	
	//动态隐藏“具体介绍”，“我要报名”，“到这里去”这3个按钮
	function hide_button4(){
		forth.css("height","80px");
		hide_content.hide();
		
	}
	//鼠标点击，显示按钮事件
	forth.click(function(){
		show_button4();
	});

	//鼠标移出，隐藏按钮事件
	second.mouseout(function(){
		hide_button4();
	});
 //*结束



  	//点击“比赛”，比赛下的内容浮动
   	function content_down1(){
   		second.slideDown("fast");
   		down_cla1.children().removeClass("glyphicon glyphicon-chevron-down");
   		down_cla1.children().addClass("glyphicon glyphicon-chevron-up");
   }

   function content_up1(){
   		second.slideUp("fast");
   		down_cla1.children().removeClass("glyphicon glyphicon-chevron-up");
   		down_cla1.children().addClass("glyphicon glyphicon-chevron-down");
    }

 	var flag = 0;
 	first.click(function(){
 		{
 			if(flag ==0){
 				content_down1();
   				flag =1;
 		
 			} else {
 				content_up1();
 				flag =0;

 			}
 		}

	//结束


 	});

 	//点击“科技”，科技下的内容浮动
   	function content_down3(){
   		forth.slideDown("fast");
   		down_cla3.children().removeClass("glyphicon glyphicon-chevron-down");
   		down_cla3.children().addClass("glyphicon glyphicon-chevron-up");
   }

   function content_up3(){
   		forth.slideUp("fast");
   		down_cla3.children().removeClass("glyphicon glyphicon-chevron-up");
   		down_cla3.children().addClass("glyphicon glyphicon-chevron-down");
    }

 	var flag = 0;
 	third.click(function(){
 		{
 			if(flag ==0){
 				content_down3();
   				flag =1;
 		
 			} else {
 				content_up3();
 				flag =0;

 			}
 		}

	//结束


 	});


})