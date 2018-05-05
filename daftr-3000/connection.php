<?php
$namahos = "localhost";
$pengguna_mysql = "root" ;
$pdata_mysql = "daftr-3000";

$connection = mysqli_connect($namahos, $pengguna_mysql) or die
("Maaf pangkalan data tidak bersabung");

mysqli_select_db($connection, $pdata_mysql) or die("Tidak dapat pilih pangkalan data");
?>
