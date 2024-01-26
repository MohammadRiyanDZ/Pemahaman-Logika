<?php 
    //jika hari ini adalah hari senin maka har iini upacara jika hari ini bukan hari senin maka hari ini tidak upcara 

    $senin = "Senin";
    $upacara = "Upacara";

    $hariIni = date('l');
    $hasil = $hariIni == $senin ? "$upacara akan dilaksanakan hari ini " 
    : 'Upacara tidak dilaksanakan hari ini';

    echo $hasil;
?>