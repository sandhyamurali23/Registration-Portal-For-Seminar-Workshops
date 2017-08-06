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
$roll = $_POST['roll'];
$branch = $_POST['branch'];
$seminarname = $_POST['seminarname'];


$sql = "Insert into registration values('$name','$roll','$branch','$seminarname')";

mysql_select_db('training');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Thanks for registering. You will be redirected in 3 seconds.\n";
header('Refresh: 3;url=main-student.php');
mysql_close($conn);
}

?>


