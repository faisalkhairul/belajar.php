<?php
    $arr = [
        ["senin", "selasa", "rabu", "kamis",],
        ["januari","februari","maret","april",],
        ["2020","2021","2022",]
    ];

    foreach($arr as $data){
        var_dump ($data);
    }

    $dataPerson = [
        [
            "Nama"=> "Faisal Khairul",
            "Kota"=> "Bandung",
            "Baju"=> "Hitam",
            "makanan_favorit"=>["Rendang","Pizza","Burger"] 
        ],
        [
            "Nama"=> "Cecep",
            "Kota"=> "Cilacep",
            "Baju"=> "Hijau",
            "makanan_favorit"=>["Rendang","Pizza"] 
        ],
        [
            "Nama"=> "Bucin",
            "Kota"=> "Jawa",
            "Baju"=> "Kuning",
            "makanan_favorit"=>["Rendang","Pizza","Burger"] 
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($arr as $data):?>
         <ul style="margin-bottom : 24px;">
            <li>Index1 : <?= $data[0]?></li>
            <li>Index2:<?= $data[1]?></li>
            <li>Index3: <?= $data[2]?></li>
        </ul> 
    <?php endforeach;?>
    
    <!-- echo $dataPerson [0]['Nama']; -->
    <?php foreach($dataPerson as $data):?>
        <ul style="margin-bottom: 24px;">
            <li> Nama: <?php echo $data ['Nama'];?></li>
            <li> Kota: <?php echo $data ['Kota'];?></li>
            <li> Baju: <?php echo $data ['Baju'];?></li>
            <li>Makanan Favorit
                <ol>
                    <?php foreach($data ['makanan_favorit'] as $makanan):?>
                        <li><?php echo $makanan; ?></li>
                    <?php endforeach; ?>
                </ol>
            </li>
        </ul>
    <?php endforeach; ?>


</body>
</html>