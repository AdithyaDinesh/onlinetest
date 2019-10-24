<?php 
	include('conn.php');
$sql="SELECT id FROM questions";
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
	$ses=$_SESSION['userId'];
	$sql1="INSERT INTO `exam` (`uid`, `shuffle`) VALUES ('$ses','$str')";
	$result=$db->query($sql1) or die('error: '.$db->error);
	$time=time();
	$outtime= $time+900;
	$sql1="INSERT INTO `timetable` (`uid`, `intime`, `outtime`) VALUES ('$ses','$time','$outtime')";
	$result=$db->query($sql1) or die('error: '.$db->error);
	// echo $ses;
	$sql="SELECT * FROM timetable WHERE uid='$ses' AND tid=(SELECT MAX(tid) FROM timetable)";

	$resultTime=$db->query($sql) or die('error: '.$db->error);
	$row = $resultTime->fetch_assoc();
?>