<?php
   session_start();
      if($_SESSION){
      if($_SESION['level']=="Admin")
      {
      	header("Location: page_admin.php");
      }
        if($_SESSION['level']=="Pengguna")
      {
      	header("Location: page_pengguna.php");
      }
  }
  include('login.php');


?>  

<html>
<head> 	

<title>SISTEM PENGURUSAN ASET SMK ALAM HIJAU, MACHANG, KELANTAN.</title>

</head>
<body>
<center>
<h3>Log Masuk Sistem Aset (KEW-PA-13) <br>SMK ALAM HIJAU, MACHANG</h3>
<p>Masukkan Email dan Katalaluan</p>

<form action="" method="post">
<label>Email:</label><input type="email" name="email" required/><br>
<label>Katalaluan:</label><input type="password" name="password" required/><br>
      <label>Pengguna:</label><select name="level">
      	      <option value="">Pilih Pengguna</option>
      	      <option value="1">Admin</option>
      	      <option value="2">Pengguna</option>
      </select><br>
<button type="submit" name="submit">Log Masuk!</button></br>
<?php echo $error; ?>
</form>

<b>Belum berdaftar?</b><br><a href="daftar.php">Daftar di sini</a>
</center>
</body>
</html>
