<?php
function dt($tanggal){
    $day = date('l', strtotime($tanggal));

    if ($day == 'Monday') {
        echo 'Senin';
    } elseif ($day == 'Tuesday') {
        echo 'Selasa';
    } elseif ($day == 'Wednesday') {
        echo 'Rabu';
    } elseif ($day == 'Thursday') {
        echo 'Kamis';
    } elseif ($day == 'Friday') {
        echo 'Jumat';
    } elseif ($day == 'Saturday') {
        echo 'Sabtu';
    } elseif ($day == 'Sunday') {
        echo 'Minggu';
    } else {
        echo 'Hari tidak valid';
    }
}

dt('2024-01-25');
?>
