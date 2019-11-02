<?php
	include('conn.php');
	$cat_id = $_GET['cat_id'];
    if ($cat_id == 3) {    	$sql="SELECT id FROM questions";    }
    else{  $sql="SELECT id FROM questions WHERE category = '$cat_id'"; }
    $result=$db->query($sql) or die($db->error);
    $arr= array();
    $a=0;
    while ($row = $result->fetch_assoc()) {
            $arr[$a]=$row['id'];
            $a++;
                }
    shuffle($arr);            
    for($i=0;$i<10;$t[$i]=$arr[$i],$i++);
    $t[$i]='#';
    $str = implode(',', $t);
    session_start();
    // $_SESSION['status']='ok';
    // $_SESSION['check']='forward';
    // print_r(expression)
    $ses = $_SESSION['userId'];
    $sql1="INSERT INTO `exam` (`uid`, `shuffle`) VALUES ('$ses','$str')";
    $result=$db->query($sql1) or die('error: '.$db->error);
	$time=time();
	$outtime= $time+900;
	$ses=$_SESSION['userId'];
	$sql1="INSERT INTO `timetable` (`uid`, `intime`, `outtime`) VALUES ('$ses','$time','$outtime')";
	$result=$db->query($sql1) or die('error: '.$db->error);
	header("location:../questions.php");   

?>