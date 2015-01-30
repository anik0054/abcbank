<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>ABC Bank</title>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="styles/style.css" />
</head>
<body class="home">
<div id="wrap">
  <div id="header"> <img src="images/logo.jpg" />
    <div id="nav">
      <ul class="menu">
        <li class="current_page_item"><a href="front_page.php">Home</a></li>
        <li><a>Hello, <?php echo $_SESSION['id']; ?> </a></li>
        <li><a href="log_out.php">Log Out</a></li>
      </ul>
    </div>
  </div>
  <div id="featured-section">
    <form action="check_withdraw.php" method="post" enctype="multipart/form-data">
		<fieldset id="textborder">
			<h1> Provide the required information: </h1> 
			<p> Account Number: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="30" name="acc_no"/> </p>
			<p> Amount: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" size="10" name="amnt"/> </p> 
			<p> &nbsp;&nbsp;&nbsp; <input type="submit" name="submit" value="Submit" /> </p>
		</fieldset>
	</form>
  </div>
</div>
</body>
</html>