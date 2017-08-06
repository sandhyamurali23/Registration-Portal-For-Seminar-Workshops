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
  	
	<title>Training</title>
</head>
<body>    
    
    <style> 
body {
    overflow:hidden;
}
</style>   <!--Hide the scrollbar-->
    
    
    
    
    
<header role="banner">
		

		<nav class="main-nav">
			<ul>
				<!-- insert more links here -->
				<li><a class="cd-signin" href="#0">Sign in</a></li><!--button-->
				<!--<li><a class="cd-signup" href="#0">Sign up</a></li><!--button-->
                
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
                        font-size: 0.15em;
                        font-weight:400}</style>
					<h1 class="main-title"><center>ERROR: The username or password is incorrect. Please try again.</center> <span class="thin"></span></h1>
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
			<ul class="cd-switcher">
				<li><a href="#0">Sign in</a></li>
				<!--<li><a href="#0">New account</a></li> -->
			</ul>

			<div id="cd-login"> <!-- log in form -->
				<form action="checklogin.php" method="post" class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">Username</label>
						<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username" name="username">
					
					</p>
                    

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">Password</label>
						<input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password" name="password">
						<a href="#0" class="hide-password">Hide</a>
						
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
</div>
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			<!-- cd-signup -->

			<div id="cd-reset-password"> <!-- reset password form -->
				<p class="cd-form-message"><a>Lost your password? Please enter your email address. You will receive a link to create a new password.</a></p>

				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
                        
					
                        	<div style="overflow: hidden; opacity: 0; width: 0px; height:0px;"><img src="img/user1.png" /></div>
		<div class="container">
			<!-- Top Navigation -->
		
			
			<div class="main clearfix">
				
					<center>
					<button id="notification-trigger" class="progress-button">
						<span class="content">Reset Password</span>
						<span class="progress"></span>
					</button></center>
				</div>
				
			<!-- Related demos -->
			
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/notificationFx.js"></script>
		<script>
			(function() {
				var bttn = document.getElementById( 'notification-trigger' );

				// make sure..
				bttn.disabled = false;
				
				bttn.addEventListener( 'click', function() {
					// simulate loading (for demo purposes only)
					classie.add( bttn, 'active' );
					setTimeout( function() {

						classie.remove( bttn, 'active' );
						
						// create the notification
						var notification = new NotificationFx({
							message : '<div class="ns-thumb"><img src="img/user1.png"/></div><div class="ns-content"><p>Please check your email for the password reset link</p></div>',
							layout : 'other',
							ttl : 6000,
							effect : 'thumbslider',
							type : 'notice', // notice, warning, error or success
							onClose : function() {
								bttn.disabled = false;
							}
						});

						// show the notification
						notification.show();

					}, 1200 );
					
					// disable the button (for demo purposes only)
					this.disabled = true;
				} );
			})();
		</script>
                        
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