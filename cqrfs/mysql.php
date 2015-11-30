

 <?php 
$con = mysql_connect("localhost","root","3317323");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("judge_report", $con);




$result = mysql_query("SELECT * FROM judge_name WHERE user_id='weilizhu'");



while($row = mysql_fetch_array($result))
  {
   
  echo $row['project_name'] . "     " . $row['project_url'];
  echo "<br />";
  }


?> 