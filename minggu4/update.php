<?php
include "connection.php";

$nim=$_POST["nim"];
$nama=$_POST["nama"];
$prodi=$_POST["prodi"];
$angkatan=$_POST["angkatan"];

$sql="Update mahasiswa SET nama='$nama', prodi='$prodi',angkatan='$angkatan' where nim='$nim'";

$hasil=mysqli_query($kon,$sql);
?> 