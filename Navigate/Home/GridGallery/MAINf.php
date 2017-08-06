<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Training</title>
		<meta name="description" content="Blueprint: Blueprint: Google Grid Gallery" />
		<meta name="keywords" content="google getting started gallery, image gallery, image grid, template, masonry" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
        
        <link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
	</head>
	<body bgcolor="#344a71">
		<div class="container">
            
           <center> <header class="clearfix">
				<style>
               h1 {color:#ffffff;
               font-family: 'Gloria Hallelujah', cursive;}
               </style>
				<h1>Faculty login<br> Welcome</h1>
				
                </header>
			</center>
			<div id="grid-gallery" class="grid-gallery">
<?php
if($_SESSION["user_name"]) {
?>
Welcome <?php echo $_SESSION["user_name"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.
<?php
}
?>		

<?php

$con=mysqli_connect("localhost","root","","training")or die("Failed to connect");

$result = mysqli_query($con,"SELECT * FROM seminar where log='F'");

echo "<b><table border='2' align='center'>
<tr>
<th><b><center>Name</center></b></th>
<th><b><center>Date</center></b></th>
<th><b><center>Description</center></b></th>
<th><b><center>Duration</center></b></th>
<th><b><center>Venue</center></b></th>
<th><b><center>Conducted By </center></b></th>
<th><b><center> Register</center></b></th>
</tr></b>";

while($row = mysqli_fetch_array($result))
  {
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['date'] . "</td>";
echo "<td>" . $row['description'] . "</td>";
echo "<td>" . $row['duration'] . "</td>";
echo "<td>" . $row['venue'] . "</td>";
echo "<td>" . $row['conductor'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>
					
		</div>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/masonry.pkgd.min.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/cbpGridGallery.js"></script>
		<script>
			new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
		</script>
	</body>
</html>
