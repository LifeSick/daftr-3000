<?php
include('connection.php');

session_start();
if(!$_SESSION['email'])
{
header("Location:index.php");
}
?>

<html>
<head>
<title>STUDENT LIST</title>
	</head>
	<body>
	<center>
		<h3>Student List </h3>
		<table id=t01 width="700" border="1"  align="center">
        	<tr>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Address</th>
                <th>IC Number</th>
                <th>Persatuan</th>
            </tr>
			<?php 
			$data1=mysqli_query($connecton, "select *from student_info");
			$no=1;
			while ($info1=mysqli_fetch_array($data1))
			{
   ?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $info1['student_name'];?> </td>
				<td><?php echo $info1['age'];?> </td>
				<td><?php echo $info1['gender'];?> </td>
				<td><?php echo $info1['address'];?> </td>
				<td><?php echo $info1['icnum'];?> </td>
				<td><?php echo $info1['persatuanid'];?> </td>
				<td width="30">
			
			</tr>
			<?php
			  $no++;

			}

	?>
         </table>
<br>
<input class="Type1" type="button" value="Menu Utama" onclick="window.location.href='page_pengguna.php'" />
<br>

<input class="Type1" type="button" value="Logout" onclick="window.location.href='Logout.php'" />

</center>
<link rel="stylesheet" href="css/userstyle.css">
</body>
</html>