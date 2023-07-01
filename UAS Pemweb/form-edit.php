<?php
include("config.php");

// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
	header('Location: list-siswa.php');
	exit();
}

// ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM antrian_puskesmas WHERE id=$id";
$query = mysqli_query($db, $sql);
$pasien = mysqli_fetch_array($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
	die("Data tidak ditemukan...");
}

// Jika formulir disubmit, lakukan proses penyimpanan
if (isset($_POST['simpan'])) {
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$NIK = $_POST['NIK'];
	$alamat = $_POST['alamat'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$poli = $_POST['poli'];
	$hari_kunjungan = $_POST['hari_kunjungan'];
	$waktu_pelayanan = $_POST['waktu_pelayanan'];
	$jenis_pembayaran = $_POST['jenis_pembayaran'];

	// buat query untuk update data
	$sql = "UPDATE antrian_puskesmas SET
				nama='$nama',
				NIK='$NIK',
				alamat='$alamat',
				jenis_kelamin='$jenis_kelamin',
				poli='$poli',
				hari_kunjungan='$hari_kunjungan',
				waktu_pelayanan='$waktu_pelayanan',
				jenis_pembayaran='$jenis_pembayaran'
			WHERE id=$id";

	// jalankan query update
	$update = mysqli_query($db, $sql);

	if ($update) {
		header('Location: list-siswa.php');
		exit();
	} else {
		die("Gagal menyimpan perubahan...");
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulir Edit Pasien | Puskesmas Sukanipon</title>
</head>
<body>
	<header>
		<h3>Formulir Edit Pasien</h3>
	</header>
	<form action="" method="POST">
		<fieldset>
			<input type="hidden" name="id" value="<?php echo $pasien['id'] ?>" />
			<p>
				<label for="nama">Nama:</label>
				<input type="text" name="nama" placeholder="Nama lengkap" value="<?php echo $pasien['nama'] ?>" />
			</p>
			<p>
				<label for="NIK">NIK:</label>
				<input type="text" name="NIK" placeholder="Nomor Induk" value="<?php echo $pasien['NIK'] ?>" />
			</p>
			<p>
				<label for="alamat">Alamat:</label>
				<textarea name="alamat"><?php echo $pasien['alamat'] ?></textarea>
			</p>
			<p>
				<label for="jenis_kelamin">Jenis Kelamin:</label>
				<?php $jk = $pasien['jenis_kelamin']; ?>
				<label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked" : "" ?>> Laki-laki</label>
				<label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked" : "" ?>> Perempuan</label>
			</p>
			<p>
				<label for="poli">Poli:</label>
				<?php $poli = $pasien['poli']; ?>
				<select name="poli">
					<option <?php echo ($poli == 'Umum') ? "selected" : "" ?>>Umum</option>
					<option <?php echo ($poli == 'Gigi dan Mulut') ? "selected" : "" ?>>Gigi dan Mulut</option>
					<option <?php echo ($poli == 'Lansia') ? "selected" : "" ?>>Lansia</option>
					<option <?php echo ($poli == 'KIA') ? "selected" : "" ?>>KIA</option>
					<option <?php echo ($poli == 'Imunisasi') ? "selected" : "" ?>>Imunisasi</option>
				</select>
			</p>
			<p>
				<label for="hari_kunjungan">Hari kunjungan:</label>
				<?php $hk = $pasien['hari_kunjungan']; ?>
				<select name="hari_kunjungan">
					<option <?php echo ($hk == 'Hari ini') ? "selected" : "" ?>>Hari ini</option>
					<option <?php echo ($hk == 'Besok') ? "selected" : "" ?>>Besok</option>
					<option <?php echo ($hk == 'Lusa') ? "selected" : "" ?>>Lusa</option>
				</select>
			</p>
			<p>
				<label for="waktu_pelayanan">Waktu pelayanan:</label>
				<?php $wp = $pasien['waktu_pelayanan']; ?>
				<select name="waktu_pelayanan">
					<option <?php echo ($wp == 'Pagi') ? "selected" : "" ?>>Pagi</option>
					<option <?php echo ($wp == 'Siang') ? "selected" : "" ?>>Siang</option>
					<option <?php echo ($wp == 'Sore') ? "selected" : "" ?>>Sore</option>
				</select>
			</p>
			<p>
				<label for="jenis_pembayaran">Jenis pembayaran:</label>
				<?php $jp = $pasien['jenis_pembayaran']; ?>
				<select name="jenis_pembayaran">
					<option <?php echo ($jp == 'BPJS') ? "selected" : "" ?>>BPJS</option>
					<option <?php echo ($jp == 'Bayar') ? "selected" : "" ?>>Bayar</option>
				</select>
			</p>
			<p>
				<input type="submit" value="Simpan" name="simpan" />
			</p>
		</fieldset>
	</form>
	<a href="index.php">Kembali ke Beranda</a>
</body>
</html>
