<?php
if(isset($_POST['submit'])){
	$u=$_POST['username'];
	$e=$_POST['email'];
	$p=md5($_POST['password']);
	session_start();
	include('conn.php');
	$sql1="INSERT INTO `user` (`username`, `email`, `password`) VALUES ('$u','$e','$p')";
	$result=$db->query($sql1) or die('error: '.$db->error);
	$_SESSION['message']='User added successfully!';
		header("location:../index.php");    
}
	

?>