<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ToKo Buah - Daffa Praramadhana</title>
    <script type="text/javascript">
        var msg  = document.title;
      var speed = 150;
      var endChar = "... ";
      var pos = 0;
      
      function moveTitle()
      {
        var ml = msg.length;
            
        title = msg.substr(pos,ml) + endChar + msg.substr(0,pos);
        document.title = title;
        
        pos++;
        if (pos > ml) pos=0;
        window.setTimeout("moveTitle()",speed);
      }
  
      moveTitle();
  </script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="head">
        <h1 style="text-align: center;">Toko Buah Segar</h1>
    </div>
    <div class="split left">
        <div class="centered">
            <h2 style="text-align: center;">Price List</h2>
                <table id="corner1" >
                <tr>
                    <th>Nama Buah</th>
                    <th>Harga</th>
                </tr>
                <tr>
                    <td>Mangga</td>
                    <td>15.000/kg</td>   
                </tr>
                <tr>
                    <td>Jambu</td>
                    <td>13.000/kg</td>
                </tr>
                <tr>
                    <td>Salak</td>
                    <td>10.000/kg</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="split right">
        <div class="centered">
            <h2 style="text-align: center;">Keranjang</h2>
           <form method="POST">
        <br>
        <table>
            <tr>
                <td>Mangga</td>
                <td><input type="text" id="mangga" name="mangga" onchange="hargaBuah()" placeholder="jumlah/kg"></td>
                <td><input id="totalMangga" name="totalMangga" placeholder="harga/kg" readonly></td>
            </tr>
            <tr>
                <td>Jambu</td>
                <td><input type="text" id="jambu" name="jambu" onchange="hargaBuah()" placeholder="jumlah/kg"></td>
                <td><input id="totalJambu" name="totalJambu" placeholder="harga/kg" readonly></td>
            </tr>
            <tr>
                <td>Salak</td>
                <td><input type="text" id="salak" name="salak" onchange="hargaBuah()" placeholder="jumlah/kg"></td>
                <td><input id="totalSalak" name="totalSalak" placeholder="harga/kg" readonly></td>
            </tr>
            <tr>
                <td>Total</td>
                <td><input id="total" name="total" readonly></td>
            </tr>
        </table>
        <br>
        <td><button type="submit" id="detailBelanja" name="detailBelanja">Submit</button></td>
    </form>
    <br>
    <br>
    <div id="corner2"> 
    <h2>Nota</h2>
    <?php
        class buah {
            var $hargaMangga, $hargaJambu, $hargaSalak;

            public function __construct($mangga, $jambu, $salak){
                $this->mangga = $mangga;
                $this->jambu = $jambu;
                $this->salak = $salak;
            }

            public function hitungMangga(){
                $this->hargaMangga = $this->mangga * 15000;
                echo "Mangga : Rp.$this->hargaMangga<br>";
            }

            public function hitungJambu(){
                $this->hargaJambu = $this->jambu * 13000;
                echo "Jambu : Rp.$this->hargaJambu<br>";
            }

            public function hitungSalak(){
                $this->hargaSalak = $this->salak * 10000;
                echo "Salak : Rp.$this->hargaSalak<br>";
            }

            public function totalHarga(){
                $total = $this->hargaMangga + $this->hargaJambu + $this->hargaSalak;
                echo "Total = Rp.$total<br>";
            }
        }
        if(isset($_POST['detailBelanja'])){
            $mangga = $_POST["mangga"];
            $jambu = $_POST["jambu"];
            $salak = $_POST["salak"];
            $detail = new buah($mangga, $jambu, $salak);
            $detail->hitungMangga();
            $detail->hitungJambu();
            $detail->hitungSalak();
            $detail->totalHarga();
        }else{
            echo "Keranjang Kamu Masih Kosong";
        }

    ?>
    </div>
        </div>
          <script type="text/javascript">
                function hargaBuah(){
                    var total = document.getElementById("total");
                    var totalMangga = document.getElementById("totalMangga");
                    var totalJambu = document.getElementById("totalJambu");
                    var totalSalak = document.getElementById("totalSalak");
                    var mangga = document.getElementById("mangga").value * 15000;
                    var jambu = document.getElementById("jambu").value * 13000;
                    var salak = document.getElementById("salak").value * 10000;
                    var jumlah = mangga + jambu + salak;
                    total.value = jumlah;
                    totalMangga.value = mangga;
                    totalJambu.value = jambu;
                    totalSalak.value = salak;
                }              
          </script>
</body>
<footer>
    <p>Daffa Praramadhana - Copyright &copy; 2021</p>
</footer>
</html>