<?php
   
   $nilaiMatematika = 5.1;
   $nilaiIPA = 6.7;
   $nilaiBahasaInd = 9.3;

    #hitung rata rata
    $rata2 =($nilaiMatematika + $nilaiIPA + $nilaiBahasaInd) / 3;

    #tampilkan data

    echo "Matematika: {$nilaiMatematika} <br>";
    echo "IPA: {$nilaiIPA} <br>";
    echo "Bahasa Indonesia: {$nilaiMatematika} <br>";
    echo "Rata Rata: {$rata2} <br>";

    #liat tipe rata rata
    var_dump($rata2);
?>