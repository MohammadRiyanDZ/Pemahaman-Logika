<?php
$belanja = 157000;
$diskon = 0.07;
if ($belanja >100000){
    echo "jumlah bayar: " .$belanja-($belanja*$diskon). "</br>";
}else{
    echo "tidak mendapatkan diskon";
}
?>
