<?php
session_start(); 
$con = mysql_connect("localhost","root","3317323");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("user_profile", $con);


$result3 = mysql_query("SELECT * FROM user_reg");
while($row5 = mysql_fetch_array($result3))
{


  $usname=$row5['user_name'];

  mysql_select_db("judge_report", $con);


echo $usname;
echo'</br>';


$result = mysql_query("SELECT * FROM judge_name WHERE user_id='$usname'");
$totalrate=0;
$numc=0;

while($row2 = mysql_fetch_array($result))
  {
   
   echo $row2['sonar_rate']; 
   echo'</br>';
   $ratenum=0;
   $ratestr=$row2['sonar_rate'];
   if ($ratestr=="A"){
   	$ratenum=4;
   	echo $ratenum; 	
   }
    if ($ratestr=="B"){
   	$ratenum=3;
   	echo $ratenum; 	
   }
   if ($ratestr=="C"){
   	$ratenum=2;
   	echo $ratenum; 	
   }
   if ($ratestr=="D"){
   	$ratenum=1;
   	echo $ratenum; 	
    }
   if ($ratestr=="dsvf"){
   	$ratenum=0;
   	$numc=$numc-1;
   	echo $ratenum; 	
   }

   $totalrate=$totalrate+$ratenum;
   $numc=$numc+1;


   }
   echo $totalrate;
   $average=(float)$totalrate/$numc;
   echo $average;



  mysql_select_db("user_profile", $con);


  
  $result2 = mysql_query("UPDATE user_reg SET user_rate='$average' WHERE user_name='$usname'");
}

?>