<?php 
    $jamkerja = 8;
    $dani = 14;

    if($dani > $jamkerja){
        echo 'Pegawai mendapatkan kompensasi berupa Rp 30.000 di jam berikutnya ' . ($dani-$jamkerja)*30000;
    }else{
        echo 'Pegawai Bekerja sesuai dengan durasi jam kerja';
    }

    
?>