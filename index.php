<?php
// ini single comment 
# single comment

/**
 * multiple comment
 * asd
 * zxc
 * qwe
 */
// ini untuk menampilkan string
// . digunakan untuk menggabungkan 2 string 
// $string1 = "Faisal Khairul";
// $string2 = "(Menggunakan Echo)";

// echo $string1.' '.$string2;

// echo 12 + 8; //interger type of data

// $x=5;
// $x +=10;

// echo $x;

// $hasilxy= $x*$y;

// echo  "hasil = " .$x."x".$y."=".$hasilxy;
// echo "\n";
// echo 5+5;
// echo "\n";
// echo 5-5;
// echo "\n";
// echo 5*5;
// echo "\n";
// echo 5/5;
// echo "\n";
// echo 25%5; // Modulus untuk mencari nilai akhir apakah ada sisa atau tidak
// echo "\n"

// echo "faisal khairul \n" . "(echo)";
// echo "<br/>";
// print "faisal khairul \n" . "(print)";

// // print_r adalah fungsi built-in php digunakan untuk menampilkan data string,array,dsb.
// print_r ("faisal khairul menggunakan print r\n");

// //var_dump adalah fungsi untuk analisa data/ untuk programmer
// var_dump ("faisal khairul menggunakan var_dump");

//Boolean true/false || 1 / 0
// var_dump (1 === "1"); //false karena === membandingkan tipe data dan value
// var_dump (1 == "1"); // true karena == membandingkan value saja
/**
 * Operator logika
 * && and
 * || or
 * ! not
 * > more than
 * < less than
 * == equal
 * >= more than equal
 * <= less than equal
 * != not equal
 */
// $umur = 17;

// var_dump ($umur < 20 && $umur >= 16);

// $nama = "Isal";

// var_dump( $nama == "Isal");

// $cek = "";
// var_dump($cek == "");

$nama = "Faisal Khairul";
$umur = "22";
$birthday = "29-02-2002";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
        <li>Nama : <?php echo $nama; ?></li>
        <li>Umur : <?php echo $umur; ?></li>
        <li>Tanggal Lahir : <?php echo $birthday; ?></li>
        <li>5 x 5 adalah <?php echo 5 * 5;?> </li>
    </ul>
</body>
</html>