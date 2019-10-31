<?php
if (isset($_POST['submit'])) {
    include('conn.php');
    session_start();
        $username=$_POST['username'];
        $password=$_POST['password'];
        $x=md5($password);
        $sql="SELECT * FROM user WHERE username='$username'";
        $result=$db->query($sql) or die($db->error);
        $row = $result->fetch_assoc();
        if ($x===$row['password']) {
                $_SESSION['user']=$row['username'];
                $_SESSION['iteration']=0;
                $_SESSION['status']='OK';
                $_SESSION['userId']=$row['userId']; 
                header("location:../index.php");             
            }else{
                $_SESSION['status']='Notok';
                $_SESSION['message'] = "Wrong Username or password!";
                header("location:../index.php");  

            }
        }


?>