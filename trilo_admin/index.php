<?php
session_start();
if(isset($_POST['login_btn']))
{
	$username=$_POST['username'];
	$password1=$_POST['pwd'];

	if($username=='trilo_code' && $password1=='HACK@ers143')
	{
		 $_SESSION['authenticated'] = true;
		$_SESSION['username']=$username; 
		header('Location:projects.php');
	
	}
	else
	{
		$message = "Incorrect Username or Password ";
		echo "<script type='text/javascript'>alert('$message');</script>";
		//header('Location: admin_login.php');
	}
}
?>
<!DOCTYPE html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/dataTables.bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/screenfull.js"></script>
		
<style>
  .nav-color{
  background-color:#00bcd4;
  }
  .nav.navbar-nav li a {
    color: white;
}
.navbar .brand, .navbar .nav > li > a:hover {
    color: black;
}
.dropdown-menu li a{
background-color:#00bcd4;
	}

	.dropdown-menu > li > a:hover {
    color: black;
}
.icon-bar {
   background-color:white !important;
}
</style>	

</head>
<body class="dashboard-page">

<div class="container">
<div class="col-md-3"></div>
<div class="col-md-6" style="margin-top: 100px;">
<div class="panel panel-info">
<div >
	<h2 style="text-align:center;">Login</h2>
</div>
	<div class="panel-body">
	
	 <form class="form-horizontal" action="" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-3" for="email">Username:&nbsp; </label>
      
	  <div class="col-sm-8">
        <input type="text" class="form-control" required="required" id="username" placeholder="Enter username" name="username">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Password:&nbsp; </label>
       
	  <div class="col-sm-8">          
        <input type="password" required="required" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-8">
        <button type="submit" class="btn btn-info btn-block" name="login_btn">Login</button>
      </div>
    </div>
  </form>
</div>	
</div>
</div>

</div>	
</body>
</html>