<?php 
    $bb = 44;
    $tb = 148;

    $tinggi = $tb/100;
    $tinggirumus = $tinggi*$tinggi;
    $hasiltinggi = number_format($tinggirumus, 2, '.', '');
    $hasil = $bb/$hasiltinggi;
    $hasilakhir = number_format($hasil,1, '.', '');
    echo "<b>";
            if($hasilakhir < 18.5){
                echo "Beni termasuk ke kategori Berat Kurang";
            }else if(($hasilakhir >= 18.5) && ($hasilakhir <= 22.9)){
                echo "Beni termasuk ke kategori Normal";
            }else if(($hasilakhir > 22.9) && ($hasilakhir <=24.9)){
                echo "Beni termasuk ke kategori Berat Badan Berlebih";
            }else{
                echo "Beni termasuk ke kategori Berat Badan Obesitas";
            }
            echo "</b>";


?>