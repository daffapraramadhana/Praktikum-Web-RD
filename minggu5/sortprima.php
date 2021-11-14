<?php

function prima(){
    echo '<h3>Program Pengurutan Bilangan Prima 1 - 50</h3>';

    for($i=1;$i<=50;$i++){
        $angka=0;
        for($j=1;$j<=$i;$j++){
            if($i%$j==0){
                $angka++;
            }
        }
        if($angka==2){
            echo $i;
            echo '<br>';
        }
    }
}

prima();

?>