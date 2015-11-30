<?php
session_start(); 

$usname=$_SESSION['username'];

$con = mysql_connect("localhost","root","3317323");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }


mysql_select_db("judge_report", $con);
$result5 = mysql_query("SELECT * FROM judge_name WHERE project_url='notest.html' and user_id='$usname'");
$pp_name="nonoe";

while($row5 = mysql_fetch_array($result5))
  {
   
   echo $row5['project_name']; 
   echo $row['user_id'];
   $pp_name=$row5['project_name'];
   echo $pp_name;
   
  
echo'</br>';


mysql_select_db("sonar", $con);


$proid="none";


$result = mysql_query("SELECT * FROM projects WHERE name='$pp_name'");  
while($row = mysql_fetch_array($result))
  {
   
   echo $row['name']; 
   echo $row['id'];
   $proid=$row['id'];

   
  }

  echo $proid;
  

  $parid=$proid-2;

  echo $parid;

  echo'</br>';


$ppurls="fv";
$isthere=(int)0;
$result3 = mysql_query("SELECT * FROM projects WHERE id='$parid'");  
while($row3 = mysql_fetch_array($result3))
  {
   
   echo $row3['id']; 
   echo $row3['deprecated_kee'];
   $ppurls=$row3['deprecated_kee'];
   $isthere=1;
   
   
  }

  
  echo'</br>';
  echo $ppurls;
  echo'</br>';

  $fullurls="notest.html";

  if ((int)$isthere>0) {
  $preurls="http://54.183.186.209:9000/dashboard/index?id=";
  $fullurls=$preurls.$ppurls;
  }
  echo $fullurls;
  echo'</br>';




$result1 = mysql_query("SELECT * FROM snapshots WHERE project_id='$proid'");

$snapid="ybeu";

while($row1 = mysql_fetch_array($result1))
  {
   
   echo $row1['project_id']; 
   echo $row1['id'];
   $snapid=$row1['id'];
   }

echo'</br>';
echo $snapid;
echo'</br>';


$result2 = mysql_query("SELECT * FROM project_measures WHERE snapshot_id='$snapid' and metric_id='133'");

$srate="dsvf";

while($row2 = mysql_fetch_array($result2))
  {
   
   echo $row2['snapshot_id']; 
   echo $row2['text_value'];
   $srate=$row2['text_value'];
   
   }
   
   echo'</br>';
   echo $srate;
   echo'</br>';

 
mysql_select_db("judge_report", $con);

mysql_query("UPDATE judge_name SET project_url = '$fullurls',sonar_rate='$srate'
WHERE project_name = '$pp_name' and user_id='$usname'");


}


 


?> 