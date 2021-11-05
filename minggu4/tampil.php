<table border="1" style="border-collapse: collapse;">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Angkatan</th>
        <th></th>
    </tr>

    <?php
    include "connection.php";
    $hasil=mysqli_query($kon,"select * from mahasiswa order by nim asc");
    $no=0;
    while ($data = mysqli_fetch_array($hasil)):
        $no++;
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $data['nim']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['prodi']; ?></td>
        <td><?php echo $data['angkatan']; ?></td>
        <td>
            <button id="btn_update" value="<?php echo $data['nim']; ?>">Update</button>
            <button id="btn_delete" value="<?php echo $data['nim']; ?>">Delete</button>
    </tr>
        <?php endwhile;?>
</table>

<br> 