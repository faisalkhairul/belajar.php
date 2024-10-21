<?php
    $arr1 = array("senin", "selasa", "rabu" , "kamis");
    $arr2 = ["senin", "selasa", "rabu", "kamis"];
    // echo hanya bekerja untuk string/int
    // Khusus debugging/ developer
    // var_dump () / print_r
    // echo $arr1;

    // var_dump ($arr2);
    // echo "<br/>";
    // print_r($arr2);
    // echo "<br/>";
    // echo $arr2 [1];

    // cara 1 mengulang data
    for ($i=0; $i < count($arr2); $i++){
        echo $arr2 [$i] . "<br/>";
    }
    // cara 2
    foreach($arr2 as $hari){
        echo $hari . "<br/>";
    }
?>