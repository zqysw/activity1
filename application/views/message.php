<!DOCTYPE html>
<html lang = "zh-cn">
<head>
	<meta charset = "utf-8"> 
	<meta http-equiv = "X-UA-Compatible" content = "IE=edge">
	<meta name = "viewport" content = "width=device-width,initial-scale = 1">
	<title>消息通知</title>
	<link href = "/activity/style/bootstrap/css/bootstrap-theme.min.css" rel = "stylesheet">
	<link href = "/activity/style/bootstrap/css/bootstrap.min.css" rel = "stylesheet">
	<link href = "/activity/style/message/css/message.css" type = "text/css" rel = "stylesheet"></link>
	<script	src = "/activity/style/bootstrap/js/jquery-1.11.1.min.js"></script>
	<script	src = "/activity/style/bootstrap/js/bootstrap.min.js"></script>
	<script	src = "/activity/style/message/js/message.js"></script>
</head>
<body> 
	<div class = "container">
		<div class = "row" id = "top">
			<div class = "col-xs-12" >
				<div class = "col-xs-3">
					<span class = "glyphicon glyphicon-chevron-left" id = "return_left"></span>
				</div>
				<div class = "col-xs-9" id = "top_font">消息通知</div>
			</div>
		</div> 

		<div class = "row protype">
			<div class = "col-xs-8 pro_font">已参与</div>
			<div class = "col-xs-4 down_cla"><span class = "glyphicon glyphicon-chevron-right"></span></div>
		</div>
		<div class = "row">
			<div class = "col-xs-12 content_font" >
			马云用户:发布人（麻花藤）已允许/拒绝您的请求。<br>
			马云用户:发布人（麻花藤）已取消该活动。
			</div>
		</div>
		<div class = "protype row">
				<div class = "col-xs-8 pro_font ">已发布</div>
				<div class = "col-xs-4 down_cla "><span class = "glyphicon glyphicon-chevron-right"></span></div>
		</div>
		<div class = "row">
			<div class = "col-xs-12 content_font" >
			麻花藤用户:马云用户想参与您的活动。
			<div class = "col-xs-6 button_ty"><button type = "button" class = "btn btn-primary btn-sm">欢迎</button></div>
			<div class = "col-xs-6 button_ty"><button type = "button" class = "btn btn-primary btn-sm">残忍拒绝</button></div>
			</div>
		</div>
	</div>
</body>
</html>