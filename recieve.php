
<?php
header("Content-Type:text/html;charset=UTF-8");
$con = mysql_connect("localhost","root","qwerty");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("my_db", $con);
mysql_query("SET NAMES UTF-8");
$sql="INSERT INTO linetable (lid,text) VALUES (1,'$_POST[line]')";
mysql_query($sql);

mysql_query("INSERT INTO `my_db`.`linetable` (`lid`, `text`) VALUES (NULL, '啊啊啊')");


mysql_close($con);
?>