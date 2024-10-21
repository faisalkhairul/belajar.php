<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pengulangan</title>
</head>
<body>
    <!-- Pengulangan for -->
    <?php
        for ($i = 0; $i < 6; $i++
){
    echo "<p> ini pengulangan ke-" . $i .  "</p>";
}
    ?>
<hr>

<!-- Pengulangan while -->
<?php
    $a = 0;
    while ($a < 5){
    echo "<p>Ini pengulangan ke -". $a . "</p>";
    $a++;
}
?>
<hr>

<!-- Pengulangan do while -->
<?php
    $x = 0;
    do{
        echo "<p>Ini pengulangan ke -". $x . "</p>";
        $x++;
    }
    while ($x < 5);
?>

</body>
</html>
<?php

