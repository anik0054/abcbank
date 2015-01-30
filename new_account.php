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
    <form action="create_account.php" method="post" enctype="multipart/form-data">
		<fieldset id="textborder">
			<h1> Provide the required information: </h1> 
			<p> Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" size="30" name="fname"/> </p>
			<p> Age: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" size="10" name="age"/> </p> 
			<p> Address: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" size="30" name="address"/> </p> 
			<p> Phone Number: &nbsp;&nbsp; <input type="text" size="30" name="phno"/> </p> 
			<p> Sex: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="sex" value="male" /> Male
				<input type="radio" name="sex" value="female" /> Female </P>
			<p> Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="password" size="20" name="pwd" /> </p>
			<p>
				<label for="file">Upload Photo:</label> &nbsp;&nbsp;&nbsp;
				<input type="file" name="file" id="file" />
			</P>
			<p> &nbsp;&nbsp;&nbsp; <input type="submit" name="submit" value="Submit" /> </p>
		</fieldset>
	</form>
  </div>
</div>
</body>
</html>