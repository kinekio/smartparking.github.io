<HTML>
<HEAD>
<TITLE>Vit Smart Parking system</TITLE>
<style type="text/css">
@import url(style.css);
#logo	{ 
	border-radius: 25px;
    border: 1px solid blue; 
    width: 100px;
    height: 100px; 
}
*	{
	color: white;
}
html { 
  background: url(img/backgroundimage.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
#main	{
		width:700px;
		height: 400px;
		margin: 0 auto;
		margin-top: 30px;
		color:white;
		border-radius: 25px;
  		padding-top: 10px;
    	padding-right: 10px;
    	padding-bottom: 10px;
    	padding-left: 10px;
    	background-color: rgba(0,0,0,0.3);
	}
</style>
</HEAD>
<BODY>
<?php 
session_start();
include("header.php"); ?>
<div id="main"><div id="vit_logo">
<A HREF="index.php">
<IMG SRC="img/vit_logo.jpg" alt="Home" id="vit_logo" width="150" height="150"></IMG>
</A></div>
<h1 align="center">Welcome to Vit Smart Parking System </h1><br/><br/><br/>
<h2 align="center">Find your spot </h2>
<br/><br/><br/>
<?php
 if(isset($_SESSION['user_info'])){
  echo '<h3 align="center"><a href="logout.php">Logout</a></h3>';
}
else{
  echo '<h3 align="center"><a href="register.php">Register/login before booking</a></h3>';
  echo '<h3 align="center"><a href="manager/manager.php">Manager Login here</a></h3>';
}
?>
</div>
</BODY>
</HTML>