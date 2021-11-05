<?php
include "connection.php";

$id = $_POST['deleteData'];

$sql = "delete from mahasiswa where nim='$id'";
$hasil=mysqli_query($kon,$sql);
?> 