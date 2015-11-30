<?php 
$con = mysql_connect("localhost","root","3317323");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("user_profile", $con);

$reg_name="fengguotian";
$reg_password="12345";
$reg_mail="fengguotian@buffalo.edu";
$reg_skill="java";
$reg_res="good";
$reg_rate=2;


$result = mysql_query("INSERT INTO user_reg(user_name, user_password, user_mail, user_skill, user_resume, user_code_rate) VALUES ('$reg_name','$reg_password','$reg_mail','$reg_skill','$reg_res','$reg_rate')");


 







