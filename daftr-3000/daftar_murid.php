<?php
include('connection.php');
session_start();
if(!$_SESSION['email'])
{
	header("Location: index.php");
}
if (isset($_POST["a1"]))
{
	$a1=$_POST["a1"];
	$a2=$_POST["a2"];
	$a3=$_POST["a3"];
	$a4=$_POST["a4"];
	$a5=$_POST["a5"];
	$a6=$_POST["a6"];

$data=mysqli_query($connection, "INSERT into student_info
(student_name,age,gender,address,icnum,persatuanid) values
('a1','a2','a3','a4','a5','a6')") or die(mysqli_error());

echo "<script>alert ('Rekod telah disimpan'); window.location='page_admin.php'</script>";
}
else
{

?>

<html>
<head>
<title>ADMINISTRATOR DESKBOARD</title>
<center>
<h3>REGISTER STUDENT</h3>
<form name="form1" action="daftar_murid.php" mehod="POST">
<fieldset>
<table width="600" border="0" align="center">
<thead>
<tr>
<th></th>
    </tr>
    </thead>
    <tbody>
<tr>

<td>
<label>Student Name: </label>
<input type="text" name="a1" placeholder="NAMA MURID" required /></td>
</tr>
<tr>
<td>
<label>Age: </label>
<input type="text" name="a2" placeholder="UMUR" required/></td>
</tr>
<tr>
<td>
<label>Gender: </label>
<input type="text" name="a3" placeholder="JANTINA" required/></td>
</tr>
<tr>
<td>
<label>Address: </label>
<input type="text" name="a4" placeholder="ALAMAT" required/></td>
</tr>
<tr>
<td>
<label>IC Number: </label>
<input type="text" name="a5" placeholder="XXX" required/></td>
</tr>
<tr>
<td>
<label>Persatuan ID: </label>
<input type="text" name="a6" placeholder="XXXXXXX" required/></td>
</tr>
<td><input type="submit" value="Register"/></td>
</tbody></table></fieldset>
</form><br>
<a href="page_admin.php" class="btn">Back to Main Menu</a><br>
<a href="logout.php" class="btn btn-red">Logout</a>
</center>
<link rel="stylesheet" href="css/adminstyle.css">
<?php
}
?>
</body>
</html>

