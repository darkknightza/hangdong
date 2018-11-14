<?php
	session_start();
	include "connect.php";

	$pass = md5($_POST['pass']);
	$strSQL = "SELECT * FROM user_login WHERE USERNAME = '".mysqli_real_escape_string($objCon,$_POST['user'])."' 
	and PASSWORD = '".mysqli_real_escape_string($objCon,$pass)."'";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			//$_SESSION["status"] = $objResult["status"];
			$_SESSION["USERNAME"] = $objResult["USERNAME"];

			session_write_close();
				header("location:indexad.php");
	}
	mysqli_close($objCon);
?>