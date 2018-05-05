<?php
session_start();

if(!$_SESSION['email'])
{
	header("Location: index.php");
}
include('cek_pengguna.php');
?>

<html>
<head>
<title>DAFT-R 300</title>
<link href="https://fonts.googleapis.com/css?family=Cabin|Slabo+27px" rel="stylesheet">
</head>
<body>
<center>
<h2>SELAMAT DATANG KE DESKBOARD PENGGUNA Daft-R 3000</h2>
<h3>MENU UTAMA SISTEM</h3>
<a href="about.html"><img border="0" alt="SORRY" src="img/link.gif" width="288" height="216"> </a> <br>
<p>Selamat datang <?php echo $_SESSION['email']; ?></p>
<br>
<a href="student_report.php" class="button2">Student Report</a> <br>
<a href="placeholder.php" class="button2">anything u want bb</a> <br>
<br>
<a href="logout.php" class="button1">LOGOUT</a> <br>
</center>
<link rel="stylesheet" href="css/userstyle.css">
</body>
</html>

