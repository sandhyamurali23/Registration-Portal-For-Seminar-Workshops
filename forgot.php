<?php
if(isset($_POST['send']))
{
$dbhost = 'localhost';
$dbuser = 'root';
$db_name="training";
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
//This code runs if the form has been submitted
if (isset($_POST['submit']))
{

// check for valid email address
$email = $_POST['remail'];
$pattern = '/^[^@]+@[^srn";,@%]+$/';
if (!preg_match($pattern, trim($email))) {
  $error[] = 'Please enter a valid email address';
}


$check = mysql_query("SELECT email FROM members WHERE email = '$email'")or die(mysql_error());
$check2 = mysql_num_rows($check);


if ($check2 == 0) {
$error[] = 'Sorry, we cannot find your account details please try another email address.';
}


if (!$error) {

$query = mysql_query("SELECT username FROM members WHERE email = '$email' ")or die (mysql_error());
$r = mysql_fetch_object($query);



$password = substr(md5(uniqid(rand(),1)),3,10);
$pass = md5($password); //encrypted version for database entry


$to = "$email";
$subject = "Account Details Recovery";
$body = "Hi $r->username, nn you or someone else have requested your account details. nn Here is your account information please keep this as you may need this at a later stage. nnYour username is $r->username nn your password is $password nn Your password has been reset please login and change your password to something more rememberable.nn Regards Site Admin";
$additionalheaders = "From: <user@domain.com>rn";
$additionalheaders .= "Reply-To: noprely@domain.com";
mail($to, $subject, $body, $additionalheaders);


$sql = mysql_query("UPDATE members SET password='$pass' WHERE email = '$email'")or die (mysql_error());
$rsent = true;


}
}


if (!empty($error))
{
        $i = 0;
        while ($i < count($error)){
        echo "<div class="msg-error">".$error[$i]."</div>";
        $i ++;}
}


if ($rsent == true){
    echo "<p>You have been sent an email with your account details to $email</p>n";
    } else {
    echo "<p>Please enter your e-mail address. You will receive a new password via e-mail.</p>n";
    }

?>