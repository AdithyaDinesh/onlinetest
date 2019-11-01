<?php
session_start();
include 'conn.php';
if ($_POST['hidd']=='NEXT') {
	$_SESSION['iteration']+=1;
	$i = $_SESSION['iteration'];
	$shuffle = array();
	$shuffle = $_SESSION['shuffle'];

	$ses = $_SESSION['userId'];
	$ans=$_POST['answer'];
				$s=($i==0)?0:$i-1;
				$sql="SELECT ans FROM questions WHERE id='$shuffle[$s]'";
				$result=$db->query($sql) or die('error: '.$db->error);
				$row = $result->fetch_assoc();
				$response=($ans==$row['ans'])?1:0;
				$eid=$_SESSION['examid'];
				$sql1="INSERT INTO `userresponse` (`uid`, `qid`, `response`, `result`, `tid`) VALUES ('$ses','$shuffle[$s]','$ans','$response','$eid')";
				$result=$db->query($sql1) or die('error: '.$db->error);
}else{
	$_SESSION['iteration'] = ($_SESSION['iteration']== 0) ? 0 : $_SESSION['iteration']-1;
}

if ($_SESSION['status']=="ok") {
          	header("location :  ../response.php"); 
}else{
			header("location:../questions.php"); 
}
?>