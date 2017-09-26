<?php

session_start();
ob_start();

//Include the database connection file
include "database_connection.php"; 

//Check to be sure that a valid session has been created
if(isset($_SESSION["VALID_USER_ID"]))
{
	
	//Check the database table for the logged in user information
	$check_user_details = mysql_query("select * from `signup_and_login_table` where `email` = '".mysql_real_escape_string($_SESSION["VALID_USER_ID"])."'");
	
	//Get all the logged in user information from the database users table
	$get_user_details = mysql_fetch_array($check_user_details);
	
	$user_id = strip_tags($get_user_details['id']);
	$firstname = strip_tags($get_user_details['firstname']);
	$lastname = strip_tags($get_user_details['lastname']);
	$email = strip_tags($get_user_details['email']);
	$passwd = strip_tags($get_user_details['password']);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Yadu Login-signup</title>



</head>
<body><br />
<center>


<div style="font-family:Verdana, Geneva, sans-serif; font-size:24px;">User Account Profile Page</div><br clear="all" /><br clear="all" />


<center>
<div style="width:740px; font-family:Verdana, Geneva, sans-serif; font-size:12px; border:5px solid #F1F1F1; " align="left">
<div style="width:220px;padding:8px;padding-bottom:13px;float:left; background:#F1F1F1;" align="left">First Name</div><div style="width:220px;padding:8px;padding-bottom:13px;float:left;background:#F1F1F1;" align="left">Last Name</div><div style="width:252px;padding:8px;padding-bottom:13px;float:left;background:#F1F1F1;" align="left">Email Address</div><br clear="all" /><br clear="all" />










<div style="padding:8px; float:left; cursor:pointer;" class="vasplus_live_edit_area" align="left">

<div style="width:236px;float:left;">
<?php echo $firstname; ?>

</div>

<div style="width:236px;float:left;">
<?php echo $lastname; ?>

</div>


<div style="width:240px;float:left;">
<?php echo $email; ?>
</div>

</div><br clear="all"><br clear="all">

<br clear="all">
<hr size="1" color="#CCCCCC">
<br clear="all"><br clear="all"><br clear="all">
&nbsp;Your MD5 encrypted password: <font color="blue"><?php echo $passwd; ?></font>


<br clear="all"><br clear="all"><br clear="all">

&nbsp;Your Fullname: <font color="blue"><?php echo $_SESSION["USER_FULLNAME"]; ?></font>
<br clear="all"><br clear="all"><br clear="all">
</div><br clear="all">
</center>

<a href="logout.php" style="text-decoration:none;"><font style="font-family:Verdana, Geneva, sans-serif; font-size:15px; color:blue;">Logout</font></a>
<p style="padding-bottom:260px;">&nbsp;</p>



</center>




</body>
</html>
<?php
}
else
{
	//Redirect user back to login page if there is no valid session created
	header("location: login.php");
}
?>
