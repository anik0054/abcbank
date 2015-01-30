<?php 
	session_start();
	include("open_database.php");
	$acc_no=$_POST['acc_no'];
	$amnt=$_POST['amnt'];
	$result1 = mysql_query(" SELECT * FROM customer WHERE account_number='$acc_no' ");
	$rows = mysql_num_rows($result1);
	if($rows!=1){
		die("Could not update:".mysql_error());
	}
	$row1 = mysql_fetch_array($result1);
	$amount=$row1['balance']+$amnt;
	$result2=mysql_query("UPDATE customer SET balance=$amount WHERE account_number='$acc_no' ");
	$row2 = mysql_fetch_array($result2);
	echo "Amount successfully deposited";
	header('Location: deposit_success.php');
?>