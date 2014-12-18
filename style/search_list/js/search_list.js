

$(document).ready(function(){
	var content_border = $('.content_border'); 
//这是动态显示按钮的函数
	content_border.click(function(){
			$(this).children('.hide_content').css("display","inline");
			$(this).css("height","120px");
		//cbArr[0].find("button").eq(i).css("display","inline");}
	});
	$('#return_left').parent().click(function(){
		history.go(-1);
	});
	
	$('.ac_introduction').click(function(){
 		location.href = "http://localhost/activity/index.php?/index/index/ac_introduction";
 	});

}) 
