<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $email = $_POST['email'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE mahasiswa_baru SET nama='$nama',nim='$nim',prodi='$prodi',email='$email' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa_baru WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
    $nim = $user_data['nim'];
    $prodi = $user_data['prodi'];
    $email = $user_data['email'];
}
?>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Data Mahasiswa</title>
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

    <div class="container">
        <form class="form-horizontal" action="add.php" method="post" name="update_user">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="nama" class="form-control" name="nama" id="nama" value=<?php echo $nama;?>>
        </div>
        <div class="form-group">
            <label for="nim">NIM:</label>
            <input type="nim" class="form-control" name="nama" id="nim" value=<?php echo $nim;?>>
        </div>
         <div class="form-group">
            <label for="prodi">Prodi:</label>
            <input type="prodi" class="form-control" name="prodi" id="prodi" value=<?php echo $prodi;?>>
        </div>
         <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" id="email" value=<?php echo $email;?>>
        </div>
        <div class="form-group">
        <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
        </div>
        <button type="submit" class="btn btn-default" name="submit" value="update" >Edit</button>
        
    </div>
</body>
</html>