<?php 
$_SESSION['adminerrmgr']='notset';
if (isset($_POST['submit'])) {
include '../includes/conn.php';
$username=$_POST['username'];
$password=$_POST['password'];
$x=md5($password);
$time=date("d/m/Y H:i:s",time());
$sql="SELECT * FROM admin WHERE username='$username'";
    $result=$db->query($sql) or die($db->error);
    session_start();
    $row = $result->fetch_assoc();
    if ($x===$row['password']) {
        $adminid= $row['id'];
        $_SESSION['admin']=$row['username'];
        $sql="UPDATE `admin` SET `lastlogin` = '$time' WHERE `admin`.`id` =$adminid;";
        $result=$db->query($sql) or die($db->error);
		header("location:index.php");  
        $_SESSION['adminerrmgr']='notset';  

    }else{
        $_SESSION['adminerrmgr']='set';
        $_SESSION['adminerr']='Password Miss match!';
        header("location:index.php");  
    }
}


?>