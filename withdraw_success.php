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
    <h1 align="center">The amount has been successfully withdrawned</h1> <br/>
  </div>
</div>
</body>
</html>