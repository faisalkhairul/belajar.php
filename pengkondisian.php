<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengkondisian</title>
</head>
<body>
    <?php
    /* 
        if-else
        if-else 0f-else
        ternary
        switch
    */
    /*
    $x = 26; 
    
    if($x == 20){
        // true
        echo "x kurang dari 20";
    }else if($x <= 30){
        // true apabila konndisi pertama tidak terpenuhi
        echo "x sama dengan 30";
    }
    else {
        // false
        echo "x lebih dari 30";
    }
    */
    /* ternary
    $umur = 20;
        echo ($umur < 30 ? "Umur kurang dari 30" : "Umur lebih dari 30");
    */
        $umur = 15;
            switch($umur){
            case 15;
            case 16;
            case 17;
            case 18;
            case 19;
                echo "umur dibawah 20 dan diatas 14";
                break;
            case 20;
                echo "Umur = 20";
                break;
            default; 
                echo "umur tidak didefinisikan";
        }
    ?>
</body>
</html>