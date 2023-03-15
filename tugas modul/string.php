<?php
    $namaDepan = "Ibnu"; #tanda petik 2
    $namaBelakang = 'Jakaria'; #tanda petik 1

    #pake tanda "" dan {}
    $namaLengkap = "{$namaDepan} {$namaBelakang}";

     #pake tanda .' '. 
    $namaLengkap2 = $namaDepan .' '. $namaBelakang;


    #tampian data dengan tanda " "
    echo "Nama Depan: {$namaDepan} <br>";

    #tampian data dengan tanda '. .'
    echo 'Nama belakang: '.$namaBelakang.' <br>';
    echo "<br>";
    echo "Nama Lengkap: $namaLengkap ";
?>