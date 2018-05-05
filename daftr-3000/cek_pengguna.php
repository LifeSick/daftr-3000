<?php
if(!isset($_SESSION['email'])){
	die("You have not logged in");
}
if($_SESSION['level']!="Pengguna"){
	die ("You are not a User");
}
?>