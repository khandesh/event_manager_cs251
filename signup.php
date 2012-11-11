<?php
$con = mysql_connect("localhost","root","kkkk");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
 
 echo $_POST['username'];
  
  mysql_select_db("login", $con);
$result = mysql_query("SELECT * FROM members ");
//while loop
$flag=1;
  while ($row = mysql_fetch_array($result))
  {
	if($_POST['username'] == $row['username'] )
	{
	$flag=0;

	header("Location:index.php?flag=6");
	}
  }
  $pass=sha1($_POST['password']);
if($flag==1)
{
mysql_query("INSERT INTO members (username, password, email, firstname, lastname)
VALUES ('$_POST[username]', '$pass', '$_POST[email]', '$_POST[firstname]','$_POST[lastname]')");

echo "Account Created Succesfully ..";
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
