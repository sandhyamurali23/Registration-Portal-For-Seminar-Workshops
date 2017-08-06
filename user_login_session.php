<?php
session_start();
$message="";
if(count($_POST)>0) {
$conn = mysql_connect("localhost","root","");
mysql_select_db("training",$conn);
$result = mysql_query("SELECT * FROM members WHERE roll='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
$row  = mysql_fetch_array($result);
if(is_array($row) ) {
//$_SESSION["user_id"] = $row[user_id];
$_SESSION["user_name"] = $row['roll'];
//$_SESSION["user_name"] = $row['log'];
} 
//else {
//$message = "Invalid Username or Password!";
//}
}
if(isset($_SESSION["user_name"]))
{
if($row['log']=='S') 
{
header('location: main-student.php? id='.$row_id[0]);
}

else if($row['log']=='F')
{
 header('location: main-teacher.php? id='.$row_id[0]);
}
else if($row['log']=='A')
{header('location: main-admin.php? id='.$row_id[0]);
}
else
{
header('location: error.php? id='.$row_id[0]);
}
}
?>

<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'> <!--Google Font API-->
    
    <link href='http://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Gem style -->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->
    <link rel="shortcut icon" href="img/favicon.png"> <!--Favicon-->
    <link rel="stylesheet" type="text/css" href="css/normalize.css" /> <!--CSS for background UI-->
	<link rel="stylesheet" type="text/css" href="css/demo1.css" /> <!--CSS for background UI-->
    <link rel="stylesheet" type="text/css" href="css/component.css" /> <!--CSS for background UI-->
    
    <link rel="stylesheet" type="text/css" href="css/css/normalize.css" /> <!--CSS functionality For Notification-->
		<link rel="stylesheet" type="text/css" href="css/css/demo.css" /> <!--CSS functionality Notification-->
		<link rel="stylesheet" type="text/css" href="css/css/ns-default.css" /> <!--Default style For Notification-->
		<link rel="stylesheet" type="text/css" href="css/css/ns-style-other.css" /> <!--Styling For Notification-->
		<script src="js/js/modernizr.custom.js"></script>
  	
	<title>Connect</title>
</head>
<body>    
    
   <!--Hide the scrollbar-->
    
    
    
    
    
<header role="banner">
    <div id="cd-logo"><a href="#0"><img src="img/cd-logo.svg" alt="Logo"></a></div>
		<!--Logo of Website-->

		<nav class="main-nav">
			<ul>
				<!-- insert more links here -->
				<li><a class="cd-signin" href="#0">Sign in</a></li><!--button-->
			<!--	<li><a class="cd-signup" href="#0">Forgot Password</a></li><!--button--> 
                
			</ul>
		</nav>
	</header>

    <!--BACKGROUND-->
    <div class="container demo-1">
			<div class="content">
				<div id="large-header" class="large-header">
					<canvas id="demo-canvas"></canvas>
                    <style>
                    h1 {
                    font-family: 'Amatic SC', cursive;
                        font-size: 0.75em;
                        font-weight:400}</style>
					<h1 class="main-title">Online registration & request for Seminar/Workshop</h1>
				</div>
				
				
			</div>	
		</div>
		<script src="js/TweenLite.min.js"></script> <!--animation of background-->
		<script src="js/EasePack.min.js"></script>
		<script src="js/rAF.js"></script>
		<script src="js/demo-1.js"></script> 
    
    <!--BACKGROUND-->
    
	<div class="cd-user-modal"> <!-- this is the entire modal form -->
        
        
        
		<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
		

			<div id="cd-login"> <!-- log in form -->
				<form action="user_login_session.php" method="post" class="cd-form">
				<?php if($message!="") { echo $message; } ?>
					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">Username</label>
						<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username" name="user_name">
					
					</p>
                    

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">Password</label>
						<input class="full-width has-padding has-border" id="signin-password" type="password"  placeholder="Password" name="password">
						<a href="#0" class="hide-password">Show</a>
						
					</p>

					<p class="fieldset">
						<input type="checkbox" id="remember-me" checked>
						<a><label for="remember-me">Remember me</label></a>
					</p>

					<p class="fieldset">
						<input class="full-width" type="submit" value="LOGIN" name="login" >
					</p>
				</form>
				
				<p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-login -->

			<!-- sign up form -->
		 <!-- <div id="cd-signup"> 
				 <form action="signup.php" method="post" class="cd-form" >
					

					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">Username</label>
						<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username" name="username" >
						<span class="cd-error-message">Enter a valid email id!</span>
					</p>
                    
                    <p class="fieldset">
						<label class="image-replace cd-email" for="signup-email">Email</label>
						<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail" name="email">
						<span class="cd-error-message">Enter Your Roll No.!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">Password</label>
						<input class="full-width has-padding has-border" id="signup-password" type="password"  placeholder="Password" name="password">
						<a href="#0" class="hide-password">Show</a>
						<span class="cd-error-message">Error message here!</span>
					</p>

					

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="CREATE ACCOUNT" name="btnreg">
					</p>
				</form>  
 </div>   --> 
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			  
 <!-- cd-signup --> 
			
			<div id="cd-reset-password"> <!-- reset password form -->
				<p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

				<form class="cd-form" action="forgot.php" method="post">
					<p class="fieldset">
						<label class="image-replace cd-email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail" name="email">
						
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Forgot password" name="reset">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
			</div> <!-- cd-reset-password -->
            
			<a href="#0" class="cd-close-form">Close</a>
		</div> <!-- cd-user-modal-container -->
	</div> <!-- cd-user-modal -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Gem jQuery -->
  
    
    
    <!--BUTTONCODE-->
    
</body>

</html>
