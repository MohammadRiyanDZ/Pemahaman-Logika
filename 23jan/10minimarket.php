<?php 
    $belanja = 95000;
    $minpotongan = 100000;
    $potonganH = 10000;
    $maxpotongan = 150000;
    $permenaki = "1 dus permen kaki";

    if($belanja > $maxpotongan){
        echo "Total Belanja mendapatkan potongan harga sebanyak $potonganH dan mendapatkan $permenaki";
    }elseif($belanja > $minpotongan){
        echo "Total Belanja mendapatkan potongan harga sebanyak $potonganH";
    }else{
        echo "Total Belanja tidak memenuhi kriteria potongan harga";
    }
?>