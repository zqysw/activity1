<!DOCTYPE html>
<html lang = "zh-cn">
<head>
	<meta charset = "utf-8"> 
	<meta http-equiv = "X-UA-Compatible" content = "IE=edge">
	<meta name = "viewport" content = "width=device-width,initial-scale = 1">
	<title>活动搜索</title>
	<link href = "/activity/style/bootstrap/css/bootstrap-theme.min.css" rel = "stylesheet">
	<link href = "/activity/style/bootstrap/css/bootstrap.min.css" rel = "stylesheet">
	<link href = "/activity/style/search/css/search_activity.css" type = "text/css" rel = "stylesheet"></link>
	<script	src = "/activity/style/bootstrap/js/jquery-1.11.1.min.js"></script>
	<script	src = "/activity/style/bootstrap/js/bootstrap.min.js"></script>
	<script	src = "/activity/style/search/js/search_activity.js"></script>
</head>
<body>
	<div class="container">
		<div class = "row" id = "top" >
			<div class = "col-xs-12" >
				<div id = "top_font">活动搜索</div>
			</div>
		</div>
		<div class = "row" style = "margin-top:30px;">
			<div class = "col-xs-5 control-label">活动类别：</div>
			<div class = "col-xs-7">
				<select class = "form-control">
					<option>科技</option>
					<option>娱乐</option>
					<option>生活</option>
					<option>其他</option>
				</select>
			</div>
		</div>
		<div class = "row" style = "margin-top:30px;">
			<div class = "col-xs-5 control-label">关键字搜索：</div>
			<div class = "col-xs-12">
				<textarea name = "act_introduce" class = "form-control" rows = "2" placeholder = "可填写发布人联系方式(选填)"></textarea>
			</div>
		</div>
		<div class = "row" style = "margin-top:30px;">
			<div class = "col-xs-5 control-label">周边范围：</div>
			<div class = "col-xs-7">
				<select class = "form-control">
					<option>100米</option>
					<option>200米</option>
					<option>500米</option>
					<option>1000米</option>
				</select>
			</div>
		</div>
		<div class = "row" style = "margin-top:30px;">
			<div class = "col-xs-12">
				<a href = "http://localhost/activity/index.php?/index/search_activity/search_list"><button style = " margin-left:180px;margin-top:10px;" class = "btn btn-primary">确定</button></a>
			</div>
		</div>
		<div class = "row bottom">
			<div class = "col-xs-3"><a href = "http://localhost/activity/index.php?/index/index" class = "btn btn-primary btn-sm " role = "button">活动推荐</a></div>
			<div class = "col-xs-3"><a href = "http://localhost/activity/index.php?/index/create_activity/index" class = "btn btn-primary btn-sm " role = "button">活动发布</a></div>
			<div class = "col-xs-3"><a href = "http://localhost/activity/index.php?/index/search_activity/index" class = "btn btn-primary btn-sm disabled" role = "button">活动搜索</a></div>
			<div class = "col-xs-3"><a href = "http://localhost/activity/index.php?/index/person/index" class = "btn btn-primary btn-sm" role = "button">我的世界</a></div>
		</div>
	</div>
</body>
</html>