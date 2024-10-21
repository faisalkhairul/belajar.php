<?php
    $nama = "Faisal Khairul";
    $pembelajaran = "pembelajaran";
    function salam($nama, $pembelajaran){
        return "selamat datang di". $pembelajaran . $nama;
    }
    function hitungUang($nominal, $jumlah){
        $num = $nominal * $jumlah;
        $stringReturnl = "Rp." . number_format($num, 0, ',');
        return $stringReturnl;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <h1><?php echo salam($nama, $pembelajaran)?></h1>
    <h1><?php echo hitungUang(5000,5); ?></h1>
</body>
</html>