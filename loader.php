<?php
$con = mysql_connect("localhost","root","kkkk");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}

mysql_select_db("login", $con);

$result = mysql_query("SELECT * FROM members");

while($row = mysql_fetch_array($result))
{
$x=$row['username'];
$pass=sha1($row['password']);
mysql_query("UPDATE members SET password='$pass'
WHERE username='$x'");
}

mysql_close($con);
?>