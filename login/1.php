<?php
$con = mysql_connect("localhost","root","kkkk");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }


// Create table
/*mysql_select_db("my_db", $con);
$sql = "CREATE TABLE Persons
(
FirstName varchar(15),
LastName varchar(15),
Age int
)";


// Execute query
mysql_query($sql,$con);
*/

/*
mysql_select_db("my_db", $con);

mysql_query("INSERT INTO Persons (FirstName, LastName, Age)
VALUES ('Peter', 'Griffin',35)");

mysql_query("INSERT INTO Persons (FirstName, LastName, Age) 
VALUES ('Glenn', 'Quagmire',33)");
*/

mysql_select_db("login", $con);

$result = mysql_query("SELECT * FROM members");

while($row = mysql_fetch_array($result))
  {
  echo $row['username'] . " " . $row['email'];
  echo "<br />";
  }
mysql_close($con);


$txt = "First line of text\nSecond line of text";

// Use wordwrap() if lines are longer than 70 characters
$txt = wordwrap($txt,70);

// Send email
mail("khandesh@iitk.ac.in","My subject",$txt);
  
?>