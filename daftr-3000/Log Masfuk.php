
<html>
<head>
	<title>SISTEM PENDAFTARAN KOKUM SMK PANTAI, LABUAN</title>
    <style>
   body{
      background-color:#B0B0B0;
   }
</style>
</head>
<body>
<center>
<h1>Daft-R 3000 (SISTEM PENDAFTARAN KOKUM)<br>SMK PANTAI, MALAYSIA, LABUAN</h1>
<p>Masukkan Email dan Katalaluan</p>
<form action="" method="post">
   <label>Email:</label><input type="email" name="email" required/><br>
   <label>Password:</label><input type="password" name="password" required/><br>
         <label>User:</label><select name="level">
            <option value="">Pilih Pengguna</option>
            <option value="1">Admin</option>
            <option value="2">Pengguna</option>
   </select><br>
   <button type="submit" name="submit" >Log Masuk! </button><br/>
   <?php echo $error; ?>

</form>

<b>Belum berdaftar?</b><br><a href="Datarr.php">Daftar di sini</a>
</center>
</body>
<link rel="stylesheet" href="login.css">
</html>