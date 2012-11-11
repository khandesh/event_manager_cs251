<?php
$o_pass = sha1($_POST['o_password']);
$pass=sha1($_POST['n_password']);
$user=$_COOKIE['user'];
$con = mysql_connect("localhost","root","kkkk");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("login", $con);

$flag=0;
$result = mysql_query("SELECT * FROM members ");
//while loop
  while ($row = mysql_fetch_array($result))
  {
	if($_COOKIE['user'] == $row['username'] && $o_pass== $row['password'] )
	{
		echo "Password updated .....";
	$flag=1;
	mysql_query("UPDATE members SET password='$pass'
WHERE username='$user'");
	header("refresh: 2; index2.php");	}
  }
if($flag==0)
{  
echo "Enter valid paassword <br/>";
header("refresh: 2; index2.php");	
}
?>

<html>
<body style="background-color:black; color:white;">
<div style="left:30%; top:30%;width:20%; height:20%; position:absolute;">
<img  src="loader1.gif"/> 
</div>
</body>
</html>