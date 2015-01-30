<?php
			$con=mysql_connect("localhost","root","");
			if(!$con)
			{
				die ("Could not connect".mysql_error());
			}
			$db=mysql_select_db("new_db",$con);
			if(!$db)
			{
				die("Could not find database".mysql_error());
			}
?>