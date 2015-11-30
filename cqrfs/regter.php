<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 
 
<center>


 <h2>Please register your CQRFS account  :)</h2>
 <p><br /></p>
 <table border="0" width="400">
  <tr>
    <td>
<form method="post" action="<?php
                        echo "<h2>您的输入：</h2>";
                        echo $username;
                        echo "<br>";
                        echo $password;
                        echo "<br>";
                        echo $mail;
                        echo "<br>";
                        echo $skill;
                        echo "<br>";
                        echo $resume;
                          ?>" > 






User name: 
<input  style="color:black;font-size:15px;width:300px;float:right" type="text" name="username" />

<p><br /></p>
  Password: 
<input  style="color:black;font-size:15px;width:300px;float:right" type="text" name="password" />
</form>

<p><br /></p>
E-mail: 
<input  style="color:black;font-size:15px;width:300px;float:right" type="text" name="mail" />
</form>

<p><br /></p>
Code skills: 
<input  style="color:black;font-size:15px;width:300px;float:right" type="text" name="skill" />
</form>

<p><br /></p>
Resume: 
<input  style="color:black;font-size:15px;height:150px;width:300px;float:right"  rows="5" type="text" name="resume" />
<p><br /></p>
<p><br /></p>
<p><br /></p>
<input type="submit" name="submit" value="提交"> 
</form>

     </td>
  </tr>
</table>

<?php
echo "<h2>您的输入：</h2>";
echo $username;
echo "<br>";
echo $password;
echo "<br>";
echo $mail;
echo "<br>";
echo $skill;
echo "<br>";
echo $resume;
?>




</center>

</body>
</html>