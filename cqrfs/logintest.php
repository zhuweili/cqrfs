<?php


$lifeTime = 5;  
session_set_cookie_params($lifeTime);  
session_start();

$username="weilizhu";
$username2;
$out_now="logout";

if ( $username2)
{

}
else
{
	echo " please log in";
}


if ( $_SESSION['username'])
{
	
    $_SESSION['username']=$username;
    $_SESSION['visit']=(int)$_SESSION['visit']+1;
    echo $_SESSION['username'];
    echo "    ";
    echo $_SESSION['visit'];
   
}
else
{
	$_SESSION['visit']=1;
	$p=(int)$_SESSION['visit'];
	if (p>5)
		session_unset();
	
	$_SESSION['username']=$username;
	echo $out_now;
	echo "    ";
    echo $_SESSION['visit'];
}



?>