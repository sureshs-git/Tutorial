<?php
	$username = '';
	$password = '';

  if (isset($_COOKIE['email'])) {
    $username = $_COOKIE['email'];
  }

  if (isset($_COOKIE['password'])) {
    $password = $_COOKIE['password'];
  }	
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Admin Dashboard - Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<!-- END CORE CSS FRAMEWORK -->
<!-- BEGIN CSS TEMPLATE -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="error-body no-top" background="assets/img/others/girldentist1.png">
<div class="container" style="background-url:assets/img/others/Desert.jpg">
  <div class="row login-container column-seperation">  
        <div class="col-md-5 col-md-offset-1">
          
          <!--<p>Use Facebook, Twitter or your email to sign in.<br>
            <a href="#">Sign up Now!</a> for a webarch account,It's free and always will be..</p>
          <br>

		   <button class="btn btn-block btn-info col-md-8" type="button">
            <span class="pull-left"><i class="icon-facebook"></i></span>
            <span class="bold">Login with Facebook</span> </button>
		   <button class="btn btn-block btn-success col-md-8" type="button">
            <span class="pull-left"><i class="icon-twitter"></i></span>
            <span class="bold">Login with Twitter</span>
		    </button>-->
        </div>
        <div class="col-md-5"> <br>
		 <form id="login-form" class="login-form" action="" method="post" style="margin-left:20%;">
		 <div class="row">
		 <h2 style="color:#fff;padding-left:13px;">Sign In</h2>
		 <div class="form-group col-md-10">
            <label class="form-label" style="color:#2d2e2f;">Username</label>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<i class=""></i>
					<input class="form-control" id="signin-email" type="email" name ="email" 
					placeholder="E-mail" value="<?=$username?>">                                
				</div>
            </div>
          </div>
          </div>
		  <div class="row">
          <div class="form-group col-md-10">
            <label class="form-label" style="color:#2d2e2f;">Password</label>
            <span class="help"></span>
            <div class="controls">
				<div class="input-with-icon right">                                       
					<i class=""></i>
					<input class="form-control" id="signin-password" name="password" type="password" 
					placeholder="Password" value="<?=$password?>">
				</div>
            </div>
          </div>
		  <div class="row">
          <div class="control-group col-md-10">
            <div class="checkbox check-success" style="padding-left:15px;"> <!--<a href="#">Trouble login in?</a>&nbsp;&nbsp;-->
              <input type="checkbox" name="remember" id="checkbox1">
              <label for="checkbox1" style="color:#2d2e2f;">Keep me reminded </label>
			  <input type="hidden" id="cookie">
            </div>
			<div id="confirmation"></div>
          </div>
          </div>
          <div class="row" style="padding-left:15px;">
            <div class="col-md-10">
              <button class="btn btn-primary btn-cons pull-right" name="submit" id="login" value="login" type="submit">Login</button>
            </div>
          </div>
		  </form>
        </div>
  </div>
</div>
<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK-->
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/js/login.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<!-- END CORE TEMPLATE JS -->
<script>
    $(document).ready(function(){
      $("#login").click(function(e){ 
          e.preventDefault();
		  if ($("#checkbox1").is(":checked")) {
		   var cookie=1;
		   $("#cookie").val(cookie);
}
        $.ajax({type: "POST",
                url: "db_connection/connect.php",
                data: { email: $("#signin-email").val(), password: $("#signin-password").val(), cookie: $("#cookie").val() },
                success:function(result){
          $("#confirmation").html(result).css({"font-size": "150%","text-align": "center", "margin-bottom": "5px"}).fadeOut(3000);
        }});
      });
    });
</script>
</body>
</html>