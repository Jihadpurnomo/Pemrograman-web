<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau belum
if(isset($_POST['daftar'])){
    // ambil data dari formulir
    $nama = $_POST['nama'] ; 
    $NIK = $_POST['NIK'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $poli = $_POST['poli'];
    $wp = $_POST['waktu_pelayanan'];
    $jp = $_POST['jenis_pembayaran'];
    // buat query
    $sql = "INSERT INTO antrian_puskesmas (nama, NIK, alamat, jenis_kelamin, poli, waktu_pelayanan, jenis_pembayaran) 
    VALUE ('$nama', '$NIK', '$alamat', '$jk', '$poli', '$wp', '$jp')";
    $query = mysqli_query ($db, $sql);
    // apakah query simpan berhasil? 
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status-sukses 
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman index.php dengan status-gagal 
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>
