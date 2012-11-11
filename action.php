<?php
$user = $_POST['username'];
$pass=sha1($_POST['password']);


if ($user&&$pass) 
{
$con = mysql_connect("localhost","root","kkkk");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("login", $con);
$result = mysql_query("SELECT * FROM members ");
//while loop
$flag=0;
  while ($row = mysql_fetch_array($result))
  {
	if($user == $row['username'] && $pass== $row['password'] )
	{
	echo "Logged in" ; $flag=1;
	$value =$user;
	echo $user;
	// send a cookie that expires in 1 hours
	setcookie("user",$value, time()+3600);
	echo $_COOKIE["user"];


	header("Location:index2.php");
	}
  }
	if($flag==0)
	{	
		header("Location:index.php?flag=7");
		
	}
		
}
else
	
    header("Location:index.php?flag=4");

?>

