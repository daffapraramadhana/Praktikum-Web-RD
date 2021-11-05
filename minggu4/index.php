<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');
        body {
	        font-family: "Ubuntu", sans-serif;
            max-width: 500px;
            margin: auto;
        }

        input, select {
            font-family: "Ubuntu", "sans-serif"; 
        }
    </style>
    <title>Form</title>
</head>
<body>
        <h2>Form Data Mahasiswa</h2>
    <form method="post" id="form_mahasiswa">
        <label>NIM</label><br>
        <input type="text" name="nim"><br><br>
        <label>Nama</label><br>
        <input type="text" name="nama"><br><br>
        <label>Prodi</label><br>
        <select name="prodi">
            <option value="IF">Teknik Informatika</option>
            <option value="PWK">Perencanaan Wilayah dan Kota</option>
            <option value="GT">Teknik Geomatika</option>
            <option value="SI">Teknik Sipil</option>
            <option value="BIO">Biologi</option>
        </select>
        <br><br>
        <label>Angkatan</label><br>
        <select name="angkatan">
            <option value="21"> 2021 </option>
            <option value="20"> 2020 </option>
            <option value="19"> 2019 </option>
            <option value="18"> 2018 </option>
            <option value="17"> 2017 </option>
        </select>
        <br><br>
    </form>
    <button id="show">Show Data</button>
    <button id="add">Add Data</button>
   
    
    <br>
    <hr>
    <h2>Table Data Mahasiswa</h2>
    <div id="tampil_data">
        <script>
        $(document).ready(function(){
            tampil()

            function tampil(){
                $.ajax({
                    type: 'GET',
                    url: "tampil.php",
                    success: function(data){
                        $('#tampil_data').html(data)
                    }
                });
            };

            $('#show').click(function(){
                alert("Berikut Data yang Sudah Terinput.")
                tampil();
            });

            $('#add').click(function(){
                var data = $('#form_mahasiswa').serialize();
                $.ajax({
                    type: 'POST',
                    url: "add.php",
                    data: data,
                    cache: false,
                    success: function(data){
                        alert("Berhasil Menambahkan")
                        tampil();
                    }
                });
            });

            $('#tampil_data').on('click','#btn_update',function(){
                var id = $(this).attr("value");
                $.ajax({
                    type :'GET',
                    url : 'updateData.php',
                    data :{id:id},
                    success : function(data){
                        $('#tampil_data').html(data);
                    }
                });
            });

            $('#tampil_data').on('submit','#form_mhs_update',function(){
                var dataUpdate = $(this).serialize();
                $.ajax({
                    type :'POST',
                    url : 'update.php',
                    data :dataUpdate,
                    cache : false,
                    success : function(data){
                        alert("Data Telah Berhasil Diperbarui");
                        $('#tampil_data').html(data);
                    }
                });
            });

            $('#tampil_data').on('click','#btn_delete',function(){
                var deleteData = $(this).attr("value");
                $.ajax({
                    type : 'POST',
                    url : 'delete.php',
                    data : {deleteData:deleteData},
                    success : function(data){
                        alert("Data Telah Berhasil Dihapus");
                        tampil();
                    }
                });
            });
        });
    </script>
    </div>

</body>
</html> 
