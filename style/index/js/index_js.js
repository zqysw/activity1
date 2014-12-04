$(document).ready(function(){

	var down_cla1 = $('.down_cla1');
	var down_cla3 = $('.down_cla3');
	var content_border = $('.content_border');  //这里的content_border就是一个对象数组了。
	var hide_content  = $('.hide_content');
	var class_border = $('.class_border');
	//console.log(typeof content_border);
	//console.log(content_border.eq(0));

	
	/*var buttonvalue = $("hide_content>button").toArray();
	content_border.click(function(){
		var thisvalue = $(this).index();
		for(i=0;i<buttonvalue.length;i++){
			thisvalue.find("button").eq(buttonvalue[i]).show();	
		}
	});*/

	//console.log(cbArr);
	//这是动态显示按钮的函数
	content_border.click(function(){
			$(this).children().css("display","inline");
			$(this).css("height","120px");
		//cbArr[0].find("button").eq(i).css("display","inline");}
	});
	//这是点击“比赛”等标签，下面内容浮动函数
	var flag = 0;
	class_border.click(function(){
		if(flag == 0){
			for(i = 0;i<content_border.size();i++)
			content_border.eq(i).slideDown("fast");	
			flag = 1;
		}else{
			for(i = 0;i<content_border.size();i++)
			content_border.eq(i).slideUp("fast");
		    $(this).children().eq(1).removeClass("glyphicon glyphicon-chevron-up");
   			$(this).children().eq(1).addClass("glyphicon glyphicon-chevron-down");
			flag = 0;
		}
	});























/*
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
*/

  	//点击“比赛”，比赛下的内容浮动
   /*	function content_down1(){
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

	//结束*/


 

 	/*//点击“科技”，科技下的内容浮动
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

	//结束*/





})