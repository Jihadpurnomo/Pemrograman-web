<?php include("config.php");?>
<!DOCTYPE html>
<html> 
<head>
	<title>Formulir Pendaftaran Pasien | Puskesmas Sukanipon</title> 
</head>
<body>
	<header>
		<h3>Formulir Pendaftaran Pasien Baru</h3>
	</header>
	<form action="proses-pendaftaran.php" method="POST"> 
		<fieldset>
			<p>
				<label for="nama">Nama: </label>
				<input type="text" name="nama" placeholder="Nama lengkap" />
			</p>
			<p>
				<label for="NIK">NIK: </label>
				<input type="text" name="NIK" placeholder="Nomor Induk" />
			</p>
			<P>
				<label for="alamat">Alamat: </label>
				<textarea name="alamat"></textarea>
			</p>
			<p>
				<label for="jenis_kelamin">Jenis Kelamin: </label>
				<label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
				<label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
			</p> 
			<p>
				<label for="poli">Poli: </label>
				<select name="poli">
					<option>Umum</option> 
					<option>Gigi dan Mulut</option> 
					<option>Lansia</option> 
					<option>KIA</option> 
					<option>Imunisasi</option>
				</select>
			</p>
			<p>
				<label for="waktu_pelayanan">Waktu pelayanan: </label>
				<select name="waktu_pelayanan">
					<option>Pagi</option> 
					<option>Siang</option> 
					<option>Sore</option> 
				</select>
			</p>
			<p>
				<label for="jenis_pembayaran">Jenis pembayaran: </label>
				<select name="jenis_pembayaran">
					<option>BPJS</option> 
					<option>Bayar</option> 
				</select>
			</p>
			<P>
				<input type="submit" value="Daftar" name="daftar" />
			</p>
		</fieldset> 
	</form>
	<a href="index.php">Kembali ke Beranda</a>
</body>
</html>
