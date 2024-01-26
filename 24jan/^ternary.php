<?php 
    $a = -9;
    $hasil1 = $a < 0 ? "negatif" : "positif";

    $hasil = $a < 0 ? "negatif" : (($a > 0) ? "positif" : 'cacah');

    echo "<br>";
    echo $hasil;
    echo "<br>";    
    echo $hasil1;
?>