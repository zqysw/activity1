$(document).ready(function(){
	var had_join = $('.had_join');
	var had_create = $('.had_create');
	var message = $('.message');

	had_join.parent().click(function(){
		location.href = "http://localhost/activity/index.php?/index/person/join_list";
	});


	had_create.click(function(){
		location.href = "http://localhost/activity/index.php?/index/person/create_list";
	});

	message.click(function(){
		location.href = "http://localhost/activity/index.php?/index/person/message";
	});
}) 
