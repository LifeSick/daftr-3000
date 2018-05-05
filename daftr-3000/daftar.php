<?php
include ("connection.php"); //connection to database
if(isset($_POST["submit"]))
   {
   	   $name = $_POST["name"];
   	   $email = $_POST["email"];
   	   $password = $_POST["password"];

   	   $name = mysqli_real_escape_string($connection, $name);
   	   $email = mysqli_real_escape_string($connection, $email);
   	   $password = mysqli_real_escape_string($connection, $password);
   	   $password = $password;

   	   $sql="SELECT email FROM users WHERE email ='$email'";
   	   $result=mysqli_query($connection,$sql);
   	   $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
   	          if(mysqli_num_rows($result) == 1)
   	          {

echo "<script>alert('Maaf...Email ini sudah didaftarkan dalam sistem');
window.location='index.php'</script>";
   	          }
   	          else
              {
$query = mysqli_query($connection, "INSERT INTO users (name,email,password,level)
VALUES ('$name','$email','$password','Pengguna')");
                      if($query)
                      {

echo "<script>alert('Terima Kasih, anda sudah berdaftar');
window.location='index.php'</script>";
                      }
              }
    }

?>

<html>
<head>
<title>SISTEM PENDAFTARAN KOKUM SMK PANTAI, LABUAN</title>
<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
</head>
<body>
<body>
<center><h3>Daftar Pengguna Baru</h3>
<p>Masukkan Email, Nama dan Katalaluan untuk di rekodkan</p>

<form name="daftar_baru" method="POST">

<!-- Email Space-->
<label>Email: </label><input type="email" name="email" placeholder="nama@example.com"
required/><br>

<!--Name Space-->
<label>Nama: </label><input type="text" name="name" placeholder="HURUF BESAR"
required/><br>

<!--PASSWORD-->
<label>Katalaluan: </label><input type="password" name="password" placeholder="MINIMUM OF 5 DIGITS"
required/><br>

<input type="submit" value="Daftar" name="submit" /><br>
    <?php ?>

</form>

<!--Pautan-->
<b> Already have an account? </b><br></b><a href="index.php">Klik di sini</a></center>
<link rel="stylesheet" href="css/style.css">
</body>
</html>