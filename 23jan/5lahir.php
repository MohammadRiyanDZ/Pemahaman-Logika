<?php 
    $andi = 2004;
    $eko = 2001;

    if ($andi%4==0)
    {
        echo "Andi ($andi) TAHUN KABISAT"; 
    }
    else if($andi%4!=0)
    {
        echo "Andi ($andi) BUKAN TAHUN KABISAT"; 
    }else{
        echo 'Tidak Terdefinisi';
    }

echo '<br>';

    if ($eko%4==0)
    {
        echo "Eko ($eko) TAHUN KABISAT"; 
    }
    else if($eko%4!=0)
    {
        echo "Eko ($eko) BUKAN TAHUN KABISAT"; 
    }else{
        echo 'Tidak Terdefinisi';
    }


?>