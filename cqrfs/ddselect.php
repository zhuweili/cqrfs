<body background="/img/header.jpg">

<?php
session_start(); 
$con = mysql_connect("localhost","root","3317323");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("judge_report", $con);

$usname=$_SESSION['username'];
echo $usname;


$result = mysql_query("SELECT * FROM judge_name WHERE user_id='$usname'");


  echo "<select>";
while($row = mysql_fetch_array($result))
  {
   echo "<option value=";
   echo "\"";
   echo $row['project_url'];
   echo "\"";
   echo ">";
  

   echo $row['project_name'];
   echo "</option>";
  }
 
echo "</select>";

?> 








