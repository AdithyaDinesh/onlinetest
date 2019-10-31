<?php
session_start();
if ($_POST['hidd']=='NEXT') {
	$_SESSION['iteration']+=1;
}else{
	$_SESSION['iteration'] = ($_SESSION['iteration']== 0) ? 0 : $_SESSION['iteration']-1;
}

if ($_SESSION['status']=="ok") {
          	header("location :  ../response.php"); 
}else{
			header("location:../questions.php"); 
}
?>