<?php
if (isset($_POST['submit'])) {
	$q=$_POST['q'];
	$a=$_POST['A'];
	$b=$_POST['B'];
	$c=$_POST['C'];
	$dd=$_POST['D'];	
	$ans=$_POST['ans'];
	$cat=$_POST['cat'];
	
	switch ($ans) {
		case 'A': $ans=$a;
			# code...
			break;
		case 'B':$ans=$b;
			# code...
			break;
		case 'C':$ans=$c;
			# code...
			break;
		case 'D':$ans=$d;
			# code...
			break;
	}
	// echo $q.$a.$b.$c.$d.$ans;
	include '../conn.php';
	$sqlAdd="INSERT INTO `questions` ( `question`, `A`, `B`, `C`, `D`, `ans` , `category`) VALUES ('$q' , '$a' , '$b' , '$c', '$dd' , '$ans' , '$cat' );";
	$resultAdd=$db->query($sqlAdd) or die('error: '.$db->error);
        header("location:index.php?navId=2");  

}
?>