<?php
	session_start();
	include("open_database.php");
	$sql="INSERT INTO customer (name,age,address,phno,sex,balance)
			VALUES
			('$_POST[fname]','$_POST[age]','$_POST[address]','$_POST[phno]','$_POST[sex]',0)";
	if(!mysql_query($sql,$con)){
		die("Could not update:".mysql_error());
	}
	$result = mysql_query("SELECT account_number FROM customer");
	while($row = mysql_fetch_array($result))
	{
		$accno=$row['account_number'];
		$_SESSION['accno']=$accno;
	}
	if ($_FILES["file"]["error"] > 0)
	{
		die("Error: " . $_FILES["file"]["error"]);
	}
	move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
	rename("upload/".$_FILES["file"]["name"],"upload/".$accno.".jpg");
	header('Location: creation_success.php');
?>