<?php   
    $mhs = array(
        array("Andika", "121212121212", "Denpasar"),
        array("wahyu", "3214321234", "Manado"),
        array("v","1324123456","jakarta"),
        array("upin","1678543213", "Malang"),
        array("mey mey", "2201010432", "makasar"),
        array("jimin", "2201010432", "Busan"),
    );

    foreach($mhs as $idx => $dta){
        echo "Data ke-" .$idx. "<br>";
        foreach($dta as $nval){
            echo $nval. "<br>";
        }
        echo "<br>";
    }