<?php
include('connection.php');
session_start();
if(!$_SESSION['email'])
{
	header("Location: index.php")
}

if (isset($_GET["id"]))
	   {
$data1=mysqli_query($connection, "select * from butiran where lokasi='$_GET[id]'");
	   }
	   else
	   {
$data=mysqli_query($connection, "select * from butiran");	   	
	   }

?>

<html>
<head>
<title>DAFT-R 3000</title>
</head>
<body>
<table width="711" border="0">
	<tr>
<td width="893"><table width="705" border="0">
	 <tr>
<td width="360" valign="top">
<img src="logo.jpg" width="85" 
