<?php
session_start();
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/sweet-alert.css">
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css">	
    <link rel="stylesheet" href="css/example.css">

    	<!-- Gem style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	  <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/sweet-alert.min.js"></script>
    <script src="js/sweet-alert.js"></script>
 
	<title>Connect</title>
</head>
<body>
	<header role="banner">
		<div id="cd-logo"><a href="main-teacher.php"><img src="img/cd-logo.svg" alt="Logo"></a></div>

		<nav class="main-nav examples">
			<ul>
				<!-- inser more links here -->
                <li><a class="cd-signin" href="">About</a></li>
				<li><a class="cd-signin" href="">Contact</a></li>
				<li><a class="cd-signin" href="request-teacher.php" >Request</a></li>
                <li><a class="cd-signin" href="register-teacher.php">Register</a></li>&nbsp;&nbsp;
                <?php
if($_SESSION["user_name"]) {
?>
Welcome <?php echo $_SESSION["user_name"]; ?>
				
				<li><a class="cd-signup" href="logout.php" title="Logout">Logout</a></li><?php
}
?>
				<!--<li><a class="cd-signup" href="#0">Sign up</a></li>-->
			</ul>
            
		</nav>
	</header>

	<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
			

			<div id="cd-login"> <!-- log in form -->
				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="signin-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Enter a valid email!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">Password</label>
						<input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
						
					</p>

					<p class="fieldset">
						<input type="checkbox" id="remember-me" checked>
						<label for="remember-me">Remember me</label>
					</p>

					<p class="fieldset">
						<input class="full-width" type="submit" value="Login">
					</p>
				</form>
				
				<p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-login -->

			<div id="cd-signup"> <!-- sign up form -->
				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">Username</label>
						<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-email" for="signup-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">Password</label>
						<input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="accept-terms">
						<label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Create account">
					</p>
				</form>

				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-signup -->

			<div id="cd-reset-password"> <!-- reset password form -->
				<p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Reset password">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
			</div> <!-- cd-reset-password -->
			<a href="#0" class="cd-close-form">Close</a>
		</div> <!-- cd-user-modal-container -->
	</div> <!-- cd-user-modal -->

    
    
    <form class="cd-forms floating-labels" action="request-f.php" method="post">
	<!--	<fieldset>
			<legend>Account Info</legend>

			

			<div class="icon">
				<label class="cd-label" for="cd-company">Name</label>
				<input class="user" type="text" name="cd-name" id="cd-company">
		    </div> 

		    <div class="icon">
		    	<label class="cd-label" for="cd-company">Phone</label>
				<input class="company" type="text" name="cd-company" id="cd-company">
		    </div> 

		    <div class="icon">
		    	<label class="cd-label" for="cd-email">Email</label>
				<input class="email" type="email" name="cd-email" id="cd-email">
		    </div>
		</fieldset>-->

		<fieldset>
			<legend>Seminar Info</legend>
  <div class="icon">
      
		    	<label class="cd-label" for="cd-company">Seminar Name</label>
				<input class="company" type="text" name="name" id="cd-company">
		    </div> 
			<div>
		

				<p class="cd-select icon">
					<select class="budget" name="designation">
						<option value="Not Selected">Select Demographic</option>
						<option value="Students">Students</option>
						<option value="Teachers">Teachers</option>
			
					</select>
				</p>
			</div> 

			<div class="icon">
				<label class="cd-label" for="cd-textarea">Seminar Description</label>
      			<textarea class="message" name="description" id="cd-textarea" required></textarea>
			</div>

			

			

			<div>
		      	<input type="submit" value="Send" name="send">
		    </div>
		</fieldset>
	</form>
    
    

<!-- What does it do? -->
   <script src="js/jquery.feedback_me.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Gem jQuery -->

</body>
</html>