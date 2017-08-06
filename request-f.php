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


$name = $_POST['name'];
$designation = $_POST['designation'];
$description = $_POST['description'];


$sql = "Insert into request values('$name','$description','$designation')";

mysql_select_db('training');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Thanks for requesting. You will be redirected in 3 seconds.\n";
header('Refresh: 3;url=main-teacher.php');
mysql_close($conn);
}

?>


