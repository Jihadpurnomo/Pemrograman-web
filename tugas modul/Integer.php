<?php
    #inisiasi dan inisialisasi variabel

    $a = 10;
    $b = 5;
    $c = $a + 5;
    $d = $b + (10 * 5);
    $e = $d - $c;

    #tampilkan data dengan perintah echo

    echo "variable a : {$a} <br>";
    echo "variable b : {$b} <br>";
    echo "variable c : {$c} <br>";
    echo "variable d : {$d} <br>";
    echo "variable e : {$e} <br>";

    # mengetahui tipe data dari variabel

    var_dump($e);
?>