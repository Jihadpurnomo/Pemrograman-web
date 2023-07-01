<?php
// include database connection file 
include_once("config.php");
// Check if form is submitted for user update, then redirect to homepage after update 
if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$nama=$_POST['nama']; 
	$NIK=$_POST['NIK'];
	$alamat=$_POST['alamat'];
	$jk=$_POST['jenis_kelamin']; 
	$poli=$_POST['poli'];
	$hk=$_POST['hari_kunjungan'];
	$wp=$_POST['waktu_pelayanan'];
	$jp=$_POST['jenis_pembayaran'];
	// update user data
	$result = mysqli_query($mysqli, "UPDATE antrian_puskesmas SET nama = '$nama',NIK = '$NIK',alamat = '$alamat', jenis_kelamin = '$jk', 
	poli = '$poli', hari_kunjungan = '$hk', waktu_pelayanan = '$wp', jenis_pembayaran = '$jp' WHERE id=$id"); 
	// Redirect to homepage to display updated user in list
	header("Location: index.php"); 
}
?>
<?php
// Display selected user data based on id 
// Getting id from url
$id = $_GET['id'];
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id"); 
while($antrian_puskesmas = mysqli_fetch_array($result))
{
	$nama = $antrian_puskesmas['nama']; 
	$NIK = $antrian_puskesmas['NIK']; 
	$alamat = $antrian_puskesmas['alamat'];
	$jp = $antrian_puskesmas['jenis_kelamin'];
	$poli = $antrian_puskesmas['poli'];
	$hk = $antrian_puskesmas['hari_kunjungan'];
	$wp = $antrian_puskesmas['waktu_pelayanan'];
	$jp = $antrian_puskesmas['jenis_pembayaran'];
}
?>
<html> 
<head>
	<title>Edit User Data</title> 
</head>
<body>
	<a href="index.php">Home</a> 
	<br/><br/>
	<form name="update_user" method="post" action="edit.php">
        <table border""0">
            <tr>
				<td>Name</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td> 
			</tr>
			<tr>
				<td>NIK</td>
				<td><input type="text" name="NIK" value=<?php echo $NIK;?>></td> 
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>  
			</tr>
			<tr>
				<td>jenis_kelamin</td>
				<td><input type="text" name="jenis_kelamin" value=<?php echo $jk;?>></td>  
			</tr>
			<tr>
				<td>Poli</td>
				<td><input type="text" name="poli" value=<?php echo $poli;?>></td>  
			</tr>
			<tr>
				<td>hari kunjungan</td>
				<td><input type="text" name="hari_kunjungan" value=<?php echo $hk;?>></td>  
			</tr>
			<tr>
				<td>Waktu pelayanan</td>
				<td><input type="text" name="waktu_pelayanan" value=<?php echo $wp;?>></td>  
			</tr>
			<tr>
				<td>Jenis pembayaran</td>
				<td><input type="text" name="jenis_pembayaran" value=<?php echo $jp;?>></td>  
			</tr>
            <tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>  
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>