﻿<?php

header("Content-Type:text/html;charset=UTF-8");
$con = mysql_connect("localhost","root","qwerty");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_query("SET NAMES UTF-8");
// Create table in my_db database
mysql_select_db("my_db", $con);
$sql = "CREATE TABLE linetable
(
id int，
text varchar(100)

)";
mysql_query($sql,$con);
mysql_close($con);

?>

<form action="recieve.php" method="post">
Line: <input type="text" line="line" />
<input type="submit" />
</form>