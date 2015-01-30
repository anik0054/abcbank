<?php
	session_start();
	include('open_database.php');
	$id=$_POST['id'];
	$pwd=$_POST['pwd'];
	$result = mysql_query(" SELECT * FROM administrator WHERE id='$id' AND password='$pwd' ");
	$rows = mysql_num_rows($result);
	if($rows==1)
	{
		$_SESSION['id']=$id;
		$_SESSION['password']=$pwd;
		header('Location: front_page.php');
	}
	else
	{
		echo "Error";
	}
?>