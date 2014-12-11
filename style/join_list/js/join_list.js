$(document).ready(function(){
var content_border = $('.content_border');
var protype = $('.protype');
var down_cla = $('.down_cla');
down_cla.addClass("glyphicon glyphicon-chevron-up");
var ac_intro = $('.ac_introduction');


content_border.click(function(){
			$(this).children('.hide_content').css("display","inline");
			$(this).css("height","120px");
		//cbArr[0].find("button").eq(i).css("display","inline");}
	}); 

	flag = 0;
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

	ac_intro.children().click(function(){
 		location.href = "http://localhost/activity/index.php?/index/index/ac_introduction";
 	});

 		$('#return_left').parent().click(function(){
		history.go(-1);
	});
})
