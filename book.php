<?php
if (isset($_COOKIE["user"]))
 { echo "welcome.....".$_COOKIE["user"]."<br/>";
}
 else
  header("Location:index.php"); 
if( $_POST["day"]){ }
else {  header("Location:index.php");}
$dd = $_POST["day"];
$mm = $_POST['month'];
$yyyy=$_POST['year'];
 $flag=1;
 $tyy=date('y')-'0';
 $tmm=date('m')-'0';
 $tdd=date('d')-'0';
 if($yyyy-'0' <2000){$flag=0; echo "date have been passed<br/>";header("refresh: 1; index2.php");}
 if($yyyy<$tyy ){$flag=0; echo "date have been passed<br/>";header("refresh: 1; index2.php"); }
 if($yyyy-'0'==$tyy  && $mm-'0'<$tmm ){$flag=0; echo "date have been passed<br/>";header("refresh: 1; index2.php");}
 if($yyyy-'0'==$tyy  && $mm-'0'==$tmm && $dd-'0'<$tdd){$flag=0; echo "date have been passed<br/>";header("refresh: 1; index2.php");}
 
 if($dd=='\0' || $mm=='\0'){$flag=0;   header("Location:index.php"); }
 if($dd-'0' >31 || $dd<=0){$flag=0; echo "Invalid date<br/>";header("refresh: 1; index2.php");}
 
 if($mm-'0' >12 || $mm<=0){$flag=0; echo "Invalid date<br/>";header("refresh: 1; index2.php");}
  	
  if($dd-'0' <=9){$dd="0".$dd;}
  if($mm-'0' <=9){$mm="0".$mm;}
$time=$_POST['Time'];
(int)$time;
$k=$_COOKIE["user"];
$con = mysql_connect("localhost","root","kkkk");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("book", $con);
$result = mysql_query("SELECT * FROM lecture ORDER BY date");	
$date=$dd.".".$_POST["month"].".".$_POST["year"];
//echo $date;
while ($row = mysql_fetch_array($result))
  {

	if($_POST['Time'] == $row['time'] && $date == $row['date'] && $_POST['room'] == $row['room'])
	{
	$flag=0;
	echo "Clash in timing .. book .another    room<br/>";
	header("refresh: 1; index2.php");
	}
  }
echo "<br/".$flag."<br/>";
if($flag==1)
{

mysql_query("INSERT INTO lecture (date, time, event, user, room)
VALUES ('$dd.$mm.$_POST[year]', '$_POST[Time]', '$_POST[Events]', '$k','$_POST[room]')");

echo "Lecture hall booked sucessfully";
}
/*
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
		header("Location:index.php");
		
	}
		
}
else
	
    header("Location:index.php?flag=4");
*/


header("refresh: 1; index2.php");
?>
<html>
<body style="background-color:black; color:white;">
<div style="left:30%; top:30%;width:20%; height:20%; position:absolute;">
<img  src="loader1.gif"/> 
</div>
</body>
</html>