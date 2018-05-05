<?php
session_start();
if(!$_SESSION['email'])
{
	header("Location: index.php");
}

include('cek_admin.php');
?>

<html>
<head>
<title>SISTEM PENGURUSAN ASET SEKOLAH (KEW-PA) </title>
<link href="https://fonts.googleapis.com/css?family=News+Cycle" rel="stylesheet">
</head>
<body>
<centre>

<!-- SENARAI MENU PENTADBIR -->
<h2>SELAMAT DATANG KE DASHBOARD PENTADBIR ASET</h2>
  <h3>MENU UTAMA SISTEM</h3>
  <div class="astolfo">
  <a href="daftar_murid.php" class="btn">Register New Student</a> <br>
  <a href="update_jenis.php" class="btn">Update Data</a> <br>
  <a href="update_lokasi.php" class="btn">Placeholder</a> <br>
  <a href="senarai_aset.php" class="btn">Remove Data</a> <br>
  <a href="logout.php" class="btn btn-red">Logout</a> <br>
  </div>
</centre>
<link rel="stylesheet" href="css/adminstyle.css">
</body>
</html>