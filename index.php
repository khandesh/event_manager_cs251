
<!--<?php if(isset($_POST['remember_me'])){

    // Set a cookie that expires in 24 hours
    setcookie("username",$username, time()+3600*24);
    setcookie("password",$password, time()+3600*24);

}
?>-->



<?php


if (isset($_COOKIE["user"]))
  header("Location:index2.php");
else
  echo "Welcome guest!<br />";

  
  
  ?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta name="keywords" content="Khandesh Bhange , 11196, IIT Kanpur, Webmaster , iitk , .iitk" />
    <meta name="author" content="Khandesh Bhange" />
	<meta name="web_author" content="Khandesh Bhange"/>
    

<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Khandesh Bhange</title>

<link rel="stylesheet" href="content.css" type="text/css"/>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery-1.7.1.js"></script>

   

<script type="text/javascript">
function f1()
{reset();
document.getElementById("1").style.background="#D9D9D9";
document.getElementById("1").style.width="240px";document.getElementById("1").style.height="40px";
document.getElementById("2").style.width="160px";document.getElementById("2").style.height="100px";
document.getElementById("3").style.width="160px";document.getElementById("3").style.height="100px";
document.getElementById("4").style.width="160px";document.getElementById("4").style.height="100px";
document.getElementById("5").style.width="160px";document.getElementById("5").style.height="100px";
document.getElementById("6").style.width="160px";document.getElementById("6").style.height="100px";
}
function f2()
{reset();
document.getElementById("2").style.background="#D9D9D9";
document.getElementById("2").style.width="240px";document.getElementById("2").style.height="100px";
document.getElementById("1").style.width="160px";document.getElementById("1").style.height="100px";
document.getElementById("3").style.width="160px";document.getElementById("3").style.height="100px";
document.getElementById("4").style.width="160px";document.getElementById("4").style.height="100px";
document.getElementById("5").style.width="160px";document.getElementById("5").style.height="100px";
document.getElementById("6").style.width="160px";document.getElementById("6").style.height="100px";

}
function f3()
{reset();
document.getElementById("3").style.background="#D9D9D9";
document.getElementById("3").style.width="240px";document.getElementById("3").style.height="100px";
document.getElementById("2").style.width="160px";document.getElementById("2").style.height="100px";
document.getElementById("1").style.width="160px";document.getElementById("1").style.height="100px";
document.getElementById("4").style.width="160px";document.getElementById("4").style.height="100px";
document.getElementById("5").style.width="160px";document.getElementById("5").style.height="100px";
document.getElementById("6").style.width="160px";document.getElementById("6").style.height="100px";

}
function f4()
{
reset();
document.getElementById("4").style.width="240px";document.getElementById("4").style.height="100px";
document.getElementById("4").style.background="#D9D9D9";
document.getElementById("2").style.width="160px";document.getElementById("2").style.height="100px";
document.getElementById("3").style.width="160px";document.getElementById("3").style.height="100px";
document.getElementById("1").style.width="160px";document.getElementById("1").style.height="100px";
document.getElementById("5").style.width="160px";document.getElementById("5").style.height="100px";
document.getElementById("6").style.width="160px";document.getElementById("6").style.height="100px";
}
function f5()
{reset();
document.getElementById("5").style.width="240px";document.getElementById("5").style.height="100px";
document.getElementById("5").style.background="#D9D9D9";
document.getElementById("4").style.width="160px";document.getElementById("4").style.height="100px";
document.getElementById("2").style.width="160px";document.getElementById("2").style.height="100px";
document.getElementById("3").style.width="160px";document.getElementById("3").style.height="100px";
document.getElementById("1").style.width="160px";document.getElementById("1").style.height="100px";
document.getElementById("6").style.width="160px";document.getElementById("6").style.height="100px";
}
function reset()
{
	document.getElementById("4").style.background="";
	document.getElementById("5").style.background="";
	document.getElementById("3").style.background="";document.getElementById("1").style.background="";
	document.getElementById("2").style.background="";
	
}
function s1()
{	
	$('#cnt2').fadeTo('fast',0);$('#cnt3').fadeTo('fast',0);
	$('#cnt4').fadeTo('fast',0);$('#cnt5').fadeTo('fast',0);
	$('#frm1').fadeTo('fast',0);$('#frm1').hide();
	$('#cnt2').hide();$('#cnt3').hide();$('#cnt4').hide();$('#cnt5').hide();
	$('#cnt1').show();$('#cnt1').fadeTo('slow',1);	
	
}
function s2()
{	
	$('#frm1').fadeTo('fast',0);$('#frm1').hide();
	$('#cnt1').fadeTo('fast',0);$('#cnt3').fadeTo('fast',0);
	$('#cnt4').fadeTo('fast',0);$('#cnt5').fadeTo('fast',0);
	$('#cnt1').hide();$('#cnt3').hide();$('#cnt4').hide();$('#cnt5').hide();
	$('#cnt2').show();$('#cnt2').fadeTo('slow',1);	
}
function s3()
{	
	$('#frm1').fadeTo('fast',0);$('#frm1').hide();
	$('#cnt1').hide();$('#cnt2').hide();$('#cnt4').hide();$('#cnt5').hide();
	$('#cnt1').fadeTo('fast',0);$('#cnt2').fadeTo('fast',0);
	$('#cnt4').fadeTo('fast',0);$('#cnt5').fadeTo('fast',0);
	$('#cnt1').hide();$('#cnt2').hide();$('#cnt4').hide();$('#cnt5').hide();
	$('#cnt3').show();$('#cnt3').fadeTo('slow',1);	
}
function s4()
{	
	$('#frm1').show();$('#frm1').fadeTo('slow',1);
	$('#cnt1').fadeTo('fast',0);$('#cnt2').fadeTo('fast',0);$('#cnt3').fadeTo('fast',0);
	$('#cnt5').fadeTo('fast',0);
	$('#cnt1').hide();$('#cnt2').hide();$('#cnt3').hide();$('#cnt5').hide();
	$('#cnt4').show();$('#cnt4').fadeTo('slow',1);	
}
function s5()
{	
	$('#frm1').fadeTo('fast',0);$('#frm1').hide();
	$('#cnt1').fadeTo('fast',0);$('#cnt2').fadeTo('fast',0);$('#cnt3').fadeTo('fast',0);
	$('#cnt4').fadeTo('fast',0);
	$('#cnt1').hide();$('#cnt2').hide();$('#cnt3').hide();$('#cnt4').hide();
	$('#cnt5').show();$('#cnt5').fadeTo('slow',1);	
}
function b1(){s1();f1();}function b2(){s2();f2();}function b3(){s3();f3();}function b4(){s4();f4();}function b5(){s5();f5();}
function hideall1()
{
     $('#cnt1').hide(); $('#cnt2').hide(); $('#cnt3').hide(); $('#cnt4').hide(); $('#cnt5').hide();
}
function change(x) {
     {
        $('#event1').show();
    }
}
</script>

</head>

<body onload="hideall1(); 
<?php
if(isset($_GET['flag']))
{if($_GET['flag']==4 && isset($_GET['flag'])){
?>
 b5();
<?php
}
else if($_GET['flag']==5 || $_GET['flag']==6)
{?>
b5();
<?php
}
else if($_GET['flag']==7 )
{?>
b5();

<?php
}

else 
{?>
b3();
<?php
}}
else
{?>
b2();
<?php
}
?>
   ">
<div  class="img" >
<img src="iitk-logo.png" style="margin-left:10px;height:90%; margin-top:3px; float:left;"/>
<img src="cse-iitk.gif" style="margin-left:10px;height:90%; margin-top:3px; float:right;"/>
<p> <code>	Computer Science And Engineering</code></p>
<p style="font-size:21px;"> <code>	IIT Kanpur</code></p>
</div>
<div class="menu">


<a onclick=" b1();">
<div class="menu_links" id="1" >
<b>Instructions</b>
</div>
</a>
<a onclick=" b2();">
<div class="menu_links"  id="2">
<b>Events</b>
</div>
</a>
<a onclick=" b3();">
<div class="menu_links"  id="3">
<b>Booking </b>
</div>
</a>
<a onclick=" b4();">
<div class="menu_links"  id="4">
<b>Profile</b>
</div>
</a>
<a onclick=" b5();">
<div class="menu_links"  id="5">
<b>Log in</b>
</div>
</a>

</div>


					<!-- Contents -->
<div style="margin-left:auto;margin-right:auto;width:80%; position:relative;  overflow:hidden; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border:1px #6A6A6A solid;" >				
<div style="background:rgba(0,0,0,.7); width:100%; position:relative; " >
<div class="contents" id="cnt1">
<h2 style="font-family:Century Gothic;" >About Event Management Website</h2>
 This website is made  to   book Lecture hall for the various types of events organized by the Faculty members  , admin  , staff and Students of IIT Kanpur .
 Before booking any Lecture hall , you must login with your valid username and password . New users must register in order to book lecture hall.
 Events must be valid , like Course Lectures , Lecture series organised by various clubs , workshops . 
 <br/><br/>Event may be : 
 <li>Repeated event (such as classes )</li> 
 <li>One-time event (such as Seminars )</li> 
 Priorities for people who can book room slots (admin > faculty > staff > students) <br/><br/>
 <h2>Notifications</h2>

   <li> When someone books a room, she gets an email back confirming that</li>
   <li> If someone else overrides the booking, if second person is of higher priority, booking is successful and first person also gets a meassage saying her booking is canceled</li>
   <li> If booking is unsuccessful due to lesser or equal priority, a message about failure</li>

</div>
<div class="contents" id="cnt2">
All booked lecture halls according to the corresponding events(in coning 7 days):<br/><br/><br/><br/>
<table style="border:1px; margin-left:auto;margin-right:auto;" border="1" cellpadding="10" cellspacing="0">
<tr>
<th>Date</th>
<th>Start Time (hr)</th>
<th>Event</th>
<th>Lecture hall</th>
<th>Booked by</th>

</tr>
<?php
$con = mysql_connect("localhost","root","kkkk");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("book", $con);
$result = mysql_query("SELECT * FROM lecture ORDER BY date");
  while ($row = mysql_fetch_array($result))
{
$k=$row['date'];
$mm = substr($k, 3, 2);
$yy = substr($k, 8, 2);
$yy=$yy-'0';
//echo $yy."<br/>";
$tyy=date('y')-'0';
//echo $tyy."kk<br/>";
if($yy>$tyy){continue;}
$dd = substr($k, 0, 2);
$dd=$dd-'0';
$mm=$mm-'0';
//(int)$mm;
$tdd=date('d')-'0';
$tmm=date('m')-'0';
//echo $dd."kk".$mm."kk".$tdd."kk".$tmm."<br/>";
$flg=0;
if($tdd<24){
	if($mm!=$tmm){ continue;}
	else if($mm==$tmm )
	{
		if($dd<$tdd){continue;}
		if($dd>$tdd+7){continue;}
	}}
if($tdd>24){
	if($mm==$tmm && $dd>$tdd){$flg=1;}
	else if($mm==$tmm+1 && $dd<(31-$tdd) ){$flg=1;}
	else {continue;}
	}
	
?>
<tr>
<td>
<?php echo $row['date'];
?>
</td>
<td>
<?php echo $row['time'];
?>
</td>
<td>
<?php 
if($row['event']==1)
{ echo "Class";}
else if($row['event']==3)
{ echo "Workshop";}
else if($row['event']==2)
{	echo "Club Lecture";}
else
	{echo "other";}
?>
</td>
<td>
<?php echo $row['room'];
?>
</td>
<td>
<?php echo $row['user'];
?>
</td>
</tr>
<?php
}?>



</table></div>
<div class="contents" id="cnt3">
To book Lecture hall , You must have to log in first.
<br/><br/><br/>

<div id="event1" name="event1" style="display:none;">kkkkkkkkkkkkkkkkkkkk</div>

<script type="text/javascript">
    
</script>

</div>
<div class="contents" id="cnt4">
<br/>
<h3 >To view profile First login or sign up</h3> 

</div>
<div class="contents" id="cnt5">
<div style="width:40%;float:left;height:100%;position:relative;">
<form action="action.php" method="post">
<fieldset>
<legend><h3>Existing User , Log in : </h3></legend>
<br/>
Username : <input type="text" name="username" /><br><br>
Password :&nbsp; <input type="password" name="password"/><br><br>
<input type="submit" value="Submit"/><br><br>
</form>
<?php
if(isset($_GET['flag']))
{
if($_GET['flag']==4 && isset($_GET['flag'])){
  echo "Please enter username and password";
}
  if($_GET['flag']==7 && isset($_GET['flag'])){
  echo "Incorrect username Or password";
}
}
?>
</div>
<div style="width:40%;float:right;height:100%;position:relative;">
<form action="signup.php" method="post">
<fieldset>
<legend><h3>New User , Sign Up :</h3></legend>
<br/>
Username &nbsp;: <input type="text" name="username" style="margin-left:20px;position:absolute;"/><br><br>
First name&nbsp; : <input type="text" name="firstname"  style="margin-left:20px;position:absolute;"/><br><br>
Last name &nbsp;: <input type="text" name="lastname" style="margin-left:20px;position:absolute;"/><br><br>
Password &nbsp;&nbsp;: <input type="password" name="password"style="margin-left:20px;position:absolute;"/><br><br>
E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" size="20" name="email" style="margin-left:20px;position:absolute;"/><br><br/>
<br/><br/>
<input type="submit" value="Submit" style="float:right;margin-right:150px;"/><br><br>
</form>
<?php
if(isset($_GET['flag']))
{
if($_GET['flag']==5 ){
  echo "Account created succesfully";
}
 else if($_GET['flag']==6 ){
  echo "Username is aleready used ... try another username...:)";

}
}
?>
</div>
</div>




</div>
</div>	
</body>
</html>