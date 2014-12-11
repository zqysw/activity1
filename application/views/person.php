 <!DOCTYPE html>
<html lang = "zh-cn">

<head>
	<meta charset = "utf-8"> 
	<meta http-equiv = "X-UA-Compatible" content = "IE=edge">
	<meta name = "viewport" content = "width=device-width,initial-scale = 1">
	<title>我的世界</title>
	<link href = "/activity/style/bootstrap/css/bootstrap-theme.min.css" rel = "stylesheet">
	<link href = "/activity/style/bootstrap/css/bootstrap.min.css" rel = "stylesheet">
	<link href = "/activity/style/person/css/person.css" type = "text/css" rel = "stylesheet"></link>
	<script	src = "/activity/style/bootstrap/js/jquery-1.11.1.min.js"></script>
	<script	src = "/activity/style/bootstrap/js/bootstrap.min.js"></script>
	<script	src = "/activity/style/person/js/person.js"></script>
</head>
<body>
	<div class = "container">
		<div class = "row" id = "top" >
			<div class = "col-xs-12" >
				<div id = "top_font">个人中心</div>
			</div>
			<div class = "photo">
				<img src = "/activity/style/person/img/photo1.jpg" class = "img-circle"/>
			</div>	
		</div>
		<div class = "row username">
			<div class = "col-xs-4">昵称：</div>
			<div class = "col-xs-5">马云</div>
			<div class = "col-xs-3"><span class = "glyphicon glyphicon-edit"></span></div>
		</div>
		<div class = "protype">
				<div class = "col-xs-8 pro_font had_join">已参与</div>
				<div class = "col-xs-4 down_cla"><span class = "glyphicon glyphicon-chevron-right"></span></div>
		</div>
		<div class = "protype1 had_create">
				<div class = "col-xs-8 pro_font ">已发布</div>
				<div class = "col-xs-4 down_cla "><span class = "glyphicon glyphicon-chevron-right"></span></div>
		</div>
		<div class = "protype1">
				<div class = "col-xs-8 pro_font">积分商城</div>
				<div class = "col-xs-4 down_cla"><span class = "glyphicon glyphicon-chevron-right"></span></div>
		</div>
		<div class = "protype1 message">
				<div class = "col-xs-8 pro_font">消息</div>
				<div class = "col-xs-4 down_cla"><span class = "glyphicon glyphicon-chevron-right"></span></div>
		</div>
		<div class = "row bottom">
			<div class = "col-xs-3"><a href = "http://localhost/activity/index.php?/index/index" class = "btn btn-primary btn-sm " role = "button">活动推荐</a></div>
			<div class = "col-xs-3"><a href = "http://localhost/activity/index.php?/index/create_activity/index" class = "btn btn-primary btn-sm" role = "button">活动发布</a></div>
			<div class = "col-xs-3"><a href = "http://localhost/activity/index.php?/index/search_activity/index" class = "btn btn-primary btn-sm" role = "button">活动搜索</a></div>
			<div class = "col-xs-3"><a href = "http://localhost/activity/index.php?/index/person/index" class = "btn btn-primary btn-sm disabled" role = "button">我的世界</a></div>
		</div>
	</div>
</body>
</html>