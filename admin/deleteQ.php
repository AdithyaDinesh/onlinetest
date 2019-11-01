<?php 
			$id=$_GET['Qid'];
			include '../includes/conn.php';
			$sqlD="DELETE FROM `questions` WHERE `questions`.`id` = $id";
			$r=$db->query($sqlD) or die($db->error);
        header("location:index.php");  
// echo $id;

?>