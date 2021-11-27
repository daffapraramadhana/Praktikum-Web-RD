<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar Mahasiswa Baru</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
 
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

<body>
    <div class="container">
         <form class="form-horizontal" action="add.php" method="post" name="form1">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="nama" class="form-control" name="nama" id="nama">
        </div>
        <div class="form-group">
            <label for="nim">NIM:</label>
            <input type="nim" class="form-control" name="nama" id="nim">
        </div>
         <div class="form-group">
            <label for="prodi">Prodi:</label>
            <input type="prodi" class="form-control" name="prodi" id="prodi">
        </div>
         <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
        <button type="submit" class="btn btn-default" name="submit" value="add">Submit</button>

    
    </form>
    
    </div>
 
   
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $prodi = $_POST['prodi'];
        $email = $_POST['email'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO mahasiswa_baru(name,nim,prodi,email) VALUES('$nama','$nim','$prodi','$email')");
        
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>