<?php 
    $persentase = 100;
    $si = 0.03;
    $a = 0.05;
    $hitungSi = $persentase-($persentase*$si);
    $hitungAlfa = $persentase-($persentase*$a);
    $hadir = "hadir";
    $kehadiran = $hadir;

    $hasil = $kehadiran == $si ? "$hitungSi%"
    : (($kehadiran == $a ) ? "$hitungAlfa%"
    : "Siswa $hadir, persentase $persentase%");

    echo $hasil;
?>
