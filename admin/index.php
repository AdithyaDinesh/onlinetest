<?php
session_start();
// error_reporting(1);
include '../includes/conn.php';
$sql="SELECT *  FROM questions";
$result=$db->query($sql) or die($db->error);
    
?>
<!DOCTYPE html>
<html>
<head>
	<title>test</title>
	<!-- <link rel="stylesheet" type="text/css" href="assets/style.css"> -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script type="text/javascript">

var temp='100';
	$(window).scroll(function () {document.getElementById('sidenav').style.height=(Number(temp)+Number(100))+'vH';});
	

	// $("#sidenav").height(5000);
</script>
</head>
<body>
			<?php include 'header.php'; ?>
			<?php
			if (isset($_SESSION['admin'])) {
			include 'adminpanel.php';
			}else include 'login.php'; ?>


</body>
</html>