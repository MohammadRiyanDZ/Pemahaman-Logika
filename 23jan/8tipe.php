<?php 
    $panjang = 13;
    $lebar = 9;
    $luas = $panjang*$lebar;
    
    if ($luas < 90) {
        echo "Tipe 36";
    }elseif ($luas > 90 && $luas < 96) {
        echo "Tipe 45";
    }elseif ($luas > 96 && $luas < 120) {
        echo "Tipe 54";
    }elseif ($luas > 120 && $luas < 150) {
        echo "Tipe 60";
    }else {
        echo "Tipe 70";
    }
?>