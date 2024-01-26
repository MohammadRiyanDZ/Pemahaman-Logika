<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Nilai Andi</title>
</head>
<body>

<form method="post" action="">
    <label for="nilai">Masukkan Nilai Anda:</label>
    <input type="text" name="nilai" id="nilai" required>
    <button type="submit">Cek Nilai</button>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST["nilai"];

        if($nilai) {
            if ($nilai > 78) {
                echo 'Nilai Anda Kompeten';
            } elseif ($nilai < 78) {
                echo 'Nilai Anda Tidak Kompeten';
            } else {
                echo 'Nilai Anda Mahir';
            }
        } else {
            echo 'Input bukan angka, harap masukkan angka.';
        }
    }
?>

</body>
</html>
