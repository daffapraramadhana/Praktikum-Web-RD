<?php
if(isset($_POST['operate'])){
    $i=0;
    $operator = ['+','-','*','/','%'];
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];

    $tambah = operasi($bil1, $bil2, $operator[0]);
    $kurang = operasi($bil1, $bil2, $operator[1]);
    $kali = operasi($bil1, $bil2, $operator[2]);
    $bagi = operasi($bil1, $bil2, $operator[3]);
    $modulo = operasi($bil1, $bil2, $operator[4]);
}
function operasi($bil1, $bil2, $operator){
    $hasil = 0;
    if($operator == '+'){
        $hasil = $bil1 + $bil2;
    }
    elseif($operator == '-'){
        $hasil = $bil1 - $bil2;
    }
    elseif($operator == '*'){
        $hasil = $bil1 * $bil2;
    }
    elseif($operator == '/'){
        $hasil = $bil1 / $bil2;
    }
    elseif($operator == '%'){
        $hasil = $bil1 % $bil2;
    }
    return $hasil;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator - Mg5</title>
</head>
<body>
    <div style="text-align: center;">
        <form method="post">
            <h1>Calculator</h1>
            <label for="bil1">Masukan Angka Pertama </label>
            <br>
            <br>
            <input type="text" name="bil1"><br><br>
            <label for="bil2">Masukan Angka Kedua </label>
            <br>
            <br>
            <input type="text" name="bil2"><br><br>
            <button type="submit" name="operate">Submit</button><br><br>
         </form>

    </div>
    <div>
        <h1 style="text-align: center;">Hasil Operasi</h1>
        <table class="center" >
            <style type="text/css">
                .center {
                    margin-left: auto;
                    margin-right: auto;
                    border-spacing: 20px;
                }
            </style>
            <th>
                <p>PENJUMLAHAN <br>
                Operator : + <br>
                Hasil : 
                <?php
                    if(isset($tambah)){
                        echo $tambah;
                    }
                ?>
                </p>
            </th>
            <th>
                <p>PENGURANGAN <br>
                Operator : - <br>
                Hasil : 
                <?php 
                    if(isset($kurang)){
                        echo $kurang;
                    }
                ?>
                </p>
            </th>
            <th>
                <p>PERKALIAN <br>
                Operator : * <br>
                Hasil : 
                <?php 
                    if(isset($kali)){
                        echo $kali;
                    }
                ?>
                </p>
             </th>
             <th>
                <p>PERKALIAN <br>
                Operator : * <br>
                Hasil : 
                <?php 
                    if(isset($kali)){
                        echo $kali;
                    }
                ?>
                </p> 
             </th>
             <th>
               <p>PEMBAGIAN <br>
                Operator : / <br>
                Hasil : 
                <?php 
                    if(isset($bagi)){
                        echo $bagi;
                    }
                ?>
                </p>
            </th>
            <th>
               <p>MODULUS <br>
                Operator : % <br>
                Hasil : 
                <?php 
                if(isset($modulo)){
                    echo $modulo;
                }
            ?>
            </p> 
            </th>
        </table>    
    </div>
</body>
</html> 