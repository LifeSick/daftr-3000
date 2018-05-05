<?php
$error="";
include "connection.php";
if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$password =$_POST['password'];
	$level = $_POST['level'];
	$query = mysqli_query($connection, "SELECT * FROM users WHERE email='$email' AND password='$password' ");
	if(mysqli_num_rows($query) == 0)
	    {
	    $error = "E-mail or Password is wrong";
	    }
	    else
	    {
	    $row = mysqli_fetch_assoc($query);
	    $_SESSION['email'] = $row['email'];
	    $_SESSION['level'] = $row['level'];

	    if($row['level'] == "Admin" && $level=="1")
	       {
	       	header("Location: page_admin.php");
	       }
	    else if($row['level'] == "Pengguna" && $level=="2")
           {
	        header("Location: page_pengguna.php");
	       }
        else
           {
          $error = "Log Masuk ke Sistem Gagal";
           }
	    }
    }


?>