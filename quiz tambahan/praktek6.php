<?php
    echo "Nama : Jihad Poernomo <br>";
    echo "NIM : 121103007 <br>";
    echo "<br>";
    echo "=================== <br>";
    echo "NIP : 100111 <br>";
    echo "Nama Pegawai : Fitriyani <br>";
    echo "=================== <br>";

    $GAPOK = 2000000;
    $Bonus = 500000;
    $Tunjangan = 0.05 * $GAPOK;
    $Pajak = 0.1 * $GAPOK;
    $Gaji = $GAPOK + $Bonus + $Tunjangan - $Pajak;

    echo "Gaji Pokok = {$GAPOK}<br>";
    echo "Bonus = {$Bonus}<br>";
    echo "Tunjangan = {$Tunjangan}<br>";
    echo "Pajak = {$Pajak}<br><br>";
    echo "Gaji yang harus dibayar = {$Gaji}<br>";
?>
