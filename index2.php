<?php
if(isset($_GET['flag']))
{
if($_GET['flag']==1 && isset($_GET['flag'])){
  header("Location:index2.php"); 

}
}
else if (isset($_COOKIE["user"]))
 { echo "welcome.....".$_COOKIE["user"];
}
 else
  header("Location:index.php"); 

 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="cache-control" content="no-cache">  
<meta http-equiv="expires" content="-1"> 
<meta http-equiv="pragma" content="no-cache">

	<meta name="keywords" content="Khandesh Bhange , 11196, IIT Kanpur, Webmaster , iitk , .iitk" />
    <meta name="author" content="Khandesh Bhange" />
	<meta name="web_author" content="Khandesh Bhange"/>
    

<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Khandesh Bhange</title>

<link rel="stylesheet" href="content.css" type="text/css"/>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery-1.7.1.js"></script>

    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-34015173-1']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

</script>

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

<body onload="hideall1(); b3();">
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
<a href="logout.php">
<div class="menu_links"  id="5">
<b>Log out</b>
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
All booked lecture halls according to the corresponding events ( in coming 7 days):<br/><br/><br/><br/>
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
<br/><br/><br/>


<form action="book.php" method="post">
<table style="border:1px; margin-left:auto;margin-right:auto;" border="1" cellpadding="10" cellspacing="0">
<tr>
<th style="width:130px;">Date</th>
<th>Time</th>
<th>Event</th>
<th>Lecture hall</th>


</tr>
<tr>
<td>
<input type="text" name="day" value="DD"style="margin-left:20px;position:absolute; float:left;position:relative; margin-left:.2px;" size="1em;">
<input type="text" name="month" value="MM"style="margin-left:20px;position:absolute;float:left;position:relative;margin-left:.2px;" size="1px;">
<input type="text" name="year" value="YYYY"style="margin-left:20px;position:absolute;float:left;position:relative;margin-left:.2px;" size="2.1px;">
</td>
<td>
<select name=Time  style="width:50px; margin-right:0;float:right;position:relative;" >
<option value="1" selected="selected">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
</select>
</td>
<td>
<select name=Events onchange='ochange(document.event_selection.Events.options[document.event_selection.Events.options.selectedIndex].value)' style="width:100px; margin-right:0;float:right;position:relative;" >
<option value="1" selected="selected">Class</option>
<option value="2">Club Lecture</option>
<option value="3">Workshop</option>
<option value="4">Other</option>
</select>
</td>
<td>
<select name=room  style="width:70px; margin-right:0;float:right;position:relative;">
<option value="101" selected="selected">101</option>
<option value="102">102</option>
<option value="103">103</option>
<option value="104">104</option>
</select>
</td>

</tr>


</table>

<input type="submit" value="Book Lecture Hall" style="margin-right:50%;margin-left:auto;position:absolute;"><br><br>
</form>

<h3>Previous bookings </h3>
<table style="border:1px; margin-left:auto;margin-right:auto;" border="1" cellpadding="10" cellspacing="0">
<tr>
<th>Date</th>
<th>Start Time (hr)</th>
<th>Event</th>
<th>Lecture hall</th>

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
if($row['user']!=$_COOKIE["user"]){continue;};

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
{	echo "Other";}
?>
</td>
<td>
<?php echo $row['room'];
?>
</td>
</tr>
<?php
}?>



</table>

<div id="event1" name="event1" style="display:none;">kkkkkkkkkkkkkkkkkkkk</div>

<script type="text/javascript">
    
</script>

</div>
<div class="contents" id="cnt4">
<br/>
<h2>Welcome .. <?php echo $_COOKIE["user"]; ?></h2> 
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
  if($row['username']==$_COOKIE["user"])
	{
  echo "Welcome".$row['firstname'] . " " . $row['lastname'];
  echo "<br/>";
  echo "Email: ".$row['email'];
  echo "<br/>";
	}
  }
?>
<form action="chnge.php" method="post">
<fieldset>
<legend><h3>Change Password </h3></legend>
<br/>
old Password :&nbsp; <input type="password" name="o_password"/><br><br>
new Password :&nbsp; <input type="password" name="n_password"/><br><br>
<input type="submit" value="Submit"/><br><br>
</fieldset>
</form>
Now U can book Lecture hall .<br/>

</div>
<div class="contents" id="cnt5">
<div style="width:40%;float:left;height:100%;position:relative;">
<form action="" >
<fieldset>
<legend><h3>Existing User , Log in : </h3></legend>
<br/>
Username : <input type="text" name="username" value=""><br><br>
Password :&nbsp; <input type="password" name="password"><br><br>
<input type="submit" value="Submit"><br><br>
</form>
</div>
<div style="width:40%;float:right;height:100%;position:relative;">
<form action="">
<fieldset>
<legend><h3>New User , Sign Up :</h3></legend>
<br/>
Username &nbsp;: <input type="text" name="username" value=""style="margin-left:20px;position:absolute;"><br><br>
First name&nbsp; : <input type="text" name="firstname" value="" style="margin-left:20px;position:absolute;"><br><br>
Last name &nbsp;: <input type="text" name="lasttname" value=""style="margin-left:20px;position:absolute;"><br><br>
Password &nbsp;&nbsp;: <input type="password" name="password"style="margin-left:20px;position:absolute;"><br><br>
E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="email" size="20"style="margin-left:20px;position:absolute;"><br><br/>
Sex &nbsp;: &nbsp;<input type="radio" name="sex" value="male">Male<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sex" value="female">Female
<br/><br/>
<select name="Select">
<option value="Faculty">Faculty</option>
<option value="Staff">Staff</option>
<option value="Student" selected="Student">Student</option>
</select>
<input type="submit" value="Submit" style="float:right;margin-right:150px;"><br><br>
</form>
</div>
</div>




</div>
</div>	

</body>

</html>
