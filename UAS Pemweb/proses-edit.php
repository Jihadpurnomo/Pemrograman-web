<?php
include("config.php");
// cek apakah tombol simpan sudah diklik atau blum? 
if (isset ($_POST['simpan'] ) ){
// archil data dari formulir
$id = $_POST['id'];
$nama = $_POST['nama'];
$NIK = $_POST['NIK'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$poli = $_POST['poli'];
$hari_kunjungan = $_POST['hari_kunjungan'];
$waktu_pelayanan = $_POST['waktu_pelayanan'];
$jenis_pembayaran = $_POST['jenis_pembayaran'];
	// buat query update
	$sql = "UPDATE antrian_puskesmas SET nama = '$nama',NIK = '$NIK',alamat = '$alamat', jenis_kelamin = '$jk', 
	poli = '$poli', hari_kunjungan = '$hk', waktu_pelayanan = '$wp', jenis_pembayaran = '$jp' WHERE id=$id"; 
	$query = mysqli_query($db, $sql);
	// apakah query update berhasil? 
	if( $query ) {
// kalau berhasil alihkan ke halaman list-siswa.php 
		header('Location: list-siswa.php');
	} else {
	// kalau gagal tarcpilkan pesan 
		die("Gagal menyircpan perubahan...");
	}
} else {
	die("Akses dilarang..."); 
}
?>