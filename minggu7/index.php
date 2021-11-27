<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa_baru ORDER BY id DESC");
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
 
<body>

     <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="landing.php">WebSite Minggu 7</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="landing.php">Home</a></li>
      <li><a href="add.php"><span class="glyphicon glyphicon-list-alt"></span>   Daftar</a></li>
      <li><a href="index.php"><span class="glyphicon glyphicon-folder-open"></span>   Data Mahasiswa</a></li>
    </ul>
  </div>
</nav>

<div class="container"></div> 
    <h2>Data Mahasiswa</h2>
    <a href="add.php" class="btn btn-info" role="button">Tambah Data Mahasiswa Baru</a> 
    <hr>
    <table class="table table-striped"> 
    <tr>
        <th>Nama</th> <th>NIM</th> <th>Prodi</th> <th>Email</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['nim']."</td>";
        echo "<td>".$user_data['prodi']."</td>"; 
        echo "<td>".$user_data['email']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>


</body>
</html>