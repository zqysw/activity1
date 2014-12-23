 <!DOCTYPE html>
<html lang = "zh-cn">
<head>
	<meta charset = "utf-8"> 
	<meta http-equiv = "X-UA-Compatible" content = "IE=edge">
	<meta name = "viewport" content = "width=device-width,initial-scale = 1">
	<title>登录</title>
	<link href = "/activity/style/bootstrap/css/bootstrap-theme.min.css" rel = "stylesheet">
	<link href = "/activity/style/bootstrap/css/bootstrap.min.css" rel = "stylesheet">
	<link href = "/activity/style/land/css/land.css" type = "text/css" rel = "stylesheet"></link>
	<script	src = "/activity/style/bootstrap/js/jquery-1.11.1.min.js"></script>
	<script	src = "/activity/style/bootstrap/js/bootstrap.min.js"></script>
	<script	src = "/activity/style/land/js/land.js"></script>
</head>
<body>
	<div class = "container">
    
		<div class = "row pic">
			<div class = "col-xs-6">
				<img src="/activity/style/land/img/hands.jpg">
			</div>
		</div>

		<form  id= "form1" role="form" action = "/activity/index.php?/land/land_in"  method = "post" class="form-horizontal formmain" >
  	   <div class="form-group" id = "user">
          <label for="user_id" class="col-sm-4 control-label">昵称</label>
          <input type="text" class="form-control" id="user_id"  name ="username">
       </div>

  	   <div class="form-group" id = "pwd">
         <label for="inputPassword3" class="col-sm-4 control-label">密码</label>
         <input type="password" class="form-control" id="password" name = "password">
       </div>
       <div style = "color:red;"><?=$note?$note:''?></div>
       <div class="form-group checkbox" style = "text-align:center;">
       		<div class="col-xs-6"><input type = "checkbox" name = "autoland" value = "1"/>自动登录</div>
       		<div class="col-xs-6"><a href="#">忘记密码？</a></div>
       </div>
       <br>
    </form>

    <div class="row checkbox" >
        <div class="col-xs-6" style="text-align:center;">
          <button type = "submit"  name = "submit" class = "btn btn-primary " form = "form1">登录</button>
        </div>
      
    <div class = "col-xs-6 register">
       <button  id = "register" name = "register" class = "btn btn-primary ">注册</button>
    </div>
    </div>
	</div>
</body>
</html>