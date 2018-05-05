<?php
   session_start();
      if($_SESSION){
      if($_SESSION['level']=="Admin")
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
<title>DAFT-R 3000</title>
<link href="https://fonts.googleapis.com/css?family=Cabin|Slabo+27px" rel="stylesheet">
</head>
<body>
<center>
<h3 class="num1">Daft-R 3000 (SISTEM PENDAFTARAN KOKUM)<br>SMK PANTAI, MALAYSIA, LABUAN</h3>
<IMG SRC="img/extrathicc-logo.png" ALT="OOPS, SOMETHING WENT WRONG" WIDTH=700 HEIGHT=233>
<p>Please input your E-mail and Password</p>

<div class="container">
<div id="main">
<form action="" method="post">
   <label>Email:</label><input type="email" name="email" required/><br>
   <label>Password:</label><input type="password" name="password" required/><br>
         <label>User:</label><select name="level">
            <option value="">User Type</option>
            <option value="1">Admin</option>
            <option value="2">Pengguna</option>
   </select><br>
   <button type="submit" name="submit" >
   Login

   <div class="button__horizontal"></div>
   <div class="button__vertical"></div>
   </button><br/>
   <?php echo $error; ?>

</form>

<b>Don't have an account?</b><br><a href="daftar.php">Register</a>
<link rel="stylesheet" href="css/style.css">
</center>
</div>
</body>
</html>