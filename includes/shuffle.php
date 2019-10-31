<?php 
	include('conn.php');
	$ses=$_SESSION['userId'];
	$sql="SELECT * FROM timetable WHERE uid='$ses' AND tid=(SELECT MAX(tid) FROM timetable)";
	$resultTime=$db->query($sql) or die('error: '.$db->error);
	$row = $resultTime->fetch_assoc();
?>