<?php 
    $nilai = [75, 77, 87, 70, 90, 81, 69, 87, 66];

    for ($i = 0; $i < 9; $i++) {
        $nilaiIndividu = $nilai[$i];

        if ($nilaiIndividu >= 75) {
            echo "Nilai $nilaiIndividu termasuk Kompeten<br>";
        } else {
            echo "Nilai $nilaiIndividu belum Kompeten<br>";
        }
    }
?>

