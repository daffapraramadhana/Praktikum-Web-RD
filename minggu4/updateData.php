<?php
include "connection.php";
$id=$_GET['id'];

$sql="select * from mahasiswa WHERE nim='$id'";

$hasil=mysqli_query($kon,$sql);

$data=mysqli_fetch_array($hasil);

?>
    <form id="form_mhs_update" method="post">

        <label>NIM</label><br>
        <input type="text" name="nim" value="<?php echo $data['nim'];?>"><br><br>

        <label>Nama</label><br>
        <input type="text" name="nama" value="<?php echo $data['nama'];?>"><br><br>

        <label>Prodi</label><br>
        <select name="prodi">
            <option value="IF" <?php if($data['prodi']=="Informatika" ) echo "selected"; ?>>Teknik Informatika</option>
            <option value="PWK" <?php if($data['prodi']=="Pwk" ) echo "selected"; ?>>Perencanaan Wilayah dan Kota</option>
            <option value="GT" <?php if($data['prodi']=="Geomatika" ) echo "selected"; ?>>Teknik Geomatika</option>
            <option value="SI" <?php if($data['prodi']=="Sipil" ) echo "selected"; ?>>Teknik Sipil</option>
            <option value="BIO" <?php if($data['prodi']=="Biologi" ) echo "selected"; ?>>Biologi</option>
        </select><br><br>

        <label>Angkatan</label><br>
        <select name="angkatan">
            <option value="21" <?php if($data['angkatan']==2021 ) echo "selected"; ?>>2021</option>
            <option value="20" <?php if($data['angkatan']==2020 ) echo "selected"; ?>>2020</option>
            <option value="19" <?php if($data['angkatan']==2019 ) echo "selected"; ?>>2019</option>
            <option value="18" <?php if($data['angkatan']==2018 ) echo "selected"; ?>>2018</option>
            <option value="17" <?php if($data['angkatan']==2017 ) echo "selected"; ?>>2017</option>
        </select><br><br>

        <button id="btn_submitUpdate" type="submit" value="Update" id="saveFile">Update</button>
    </form> 