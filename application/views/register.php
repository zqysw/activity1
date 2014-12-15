 <!DOCTYPE html>
<html lang = "zh-cn">
<head>
	<meta charset = "utf-8"> 
	<meta http-equiv = "X-UA-Compatible" content = "IE=edge">
	<meta name = "viewport" content = "width=device-width,initial-scale = 1">
	<title>注册</title>
	<link href = "/activity/style/bootstrap/css/bootstrap-theme.min.css" rel = "stylesheet">
	<link href = "/activity/style/bootstrap/css/bootstrap.min.css" rel = "stylesheet">
	<link href = "/activity/style/register/css/register.css" type = "text/css" rel = "stylesheet"></link>
	<script	src = "/activity/style/bootstrap/js/jquery-1.11.1.min.js"></script>
	<script	src = "/activity/style/bootstrap/js/bootstrap.min.js"></script>
	<script	src = "/activity/style/register/js/register.js"></script>

	<!--<script type="text/javascript">
            $(document).ready(function (){
            	public function  notice($note){
              
               alert("<?php  echo $note;?>");
           }
           notice($note);
            })
        </script>-->
</head>
<body>
	<div class = "container">
		<form class="form-horizontal" role="form" action = "/activity/index.php?/sign/register_in" method = "post">
			<div class = "form-group">
				<div class = "col-xs-12 reg_font">注册</div>
			</div>
		 	<div class="form-group">
		   		<label  class="col-xs-3 control-label">昵称</label>
		    	<div class="col-xs-7" style = "margin-left:22px;"><?php echo $data['string'];?>
		      		<input class="form-control" type = "text" name = "username" >
		     
		    	</div>
		    </div>
		    <div class="form-group">
		    	<label id = "password1"  class="col-xs-3 control-label">密码</label>
		    	<div class="col-xs-7" style = "margin-left:22px;">  
		     		 <input type="password" class="form-control" name = "password" >
		
		    	</div>
	  		</div>
		    <div class="form-group">
		    	<label id = "password2"  class="col-xs-4 control-label">确认密码</label>
		    	<div class="col-xs-7">
		     		 <input type="password" class="form-control" name = "passconf" >
		    	</div>
	  	    </div>
	  	    <div class="form-group">
		    	<label class="col-xs-4 control-label">联系方式</label>
		    	<div class="col-xs-7">
		     		 <input name = "phone" class="form-control" placeholder = "必填">
		
		    	</div>
	  	    </div>
	  	    <div class="form-group">
		    	<div class = "col-xs-12">
		    		<button type = "submit" style = " margin-left:180px;margin-top:10px;" class = "btn btn-primary">确定</button>
		    	</div>
	  	    </div>
		</form>
	</div>
</body>
</html>