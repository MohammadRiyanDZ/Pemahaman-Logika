<?php 
    $usia = 17;

    if($usia > 6 && $usia < 12){
        echo 'Waktu turu yang baik adalah 10 jam';
    }elseif ($usia > 12 && $usia < 18){
        echo 'Waktu turu yang baik adalah 8-9 jam';
    }elseif ($usia > 18 && $usia < 40){
        echo 'Waktu turu yang baik adalah 7-8 jam';
    }else{
        echo 'Tidak Terdefinisi';
    }

?>