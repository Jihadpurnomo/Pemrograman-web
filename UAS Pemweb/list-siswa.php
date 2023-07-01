<?php include("config.php"); ?> 
<!DOCTYPE html>
<html> 
<head>
    <title>Database Pasien</title> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        header {
            margin-bottom: 20px;
        }

        h3 {
            margin: 0;
        }

        nav {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #dee2e6;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f8f9fa;
        }

        a {
            text-decoration: none;
        }

        .btn {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            border: 1px solid transparent;
            border-radius: 4px;
            user-select: none;
        }

        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .btn-danger {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            color: #fff;
            background-color: #c82333;
            border-color: #bd2130;
        }

        .text-center {
            text-align: center;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: "Konfirmasi Hapus",
                text: "Apakah Anda yakin ingin menghapus data ini?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#dc3545",
                cancelButtonColor: "#6c757d",
                confirmButtonText: "Hapus",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "hapus.php?id=" + id;
                }
            });
        }
    </script>
</head>
<body>
    <header>
        <h3>Database Pasien</h3>
    </header>
    <nav>
        <a class="btn btn-primary" href="form-daftar.php">[+] Tambah Baru</a>
    </nav>
    <br>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Poli</th>
                <th>Waktu Pelayanan</th>
                <th>Jenis Pembayaran</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM antrian_puskesmas ORDER BY id ASC"; 
            $query = mysqli_query($db, $sql);
            if ($query && mysqli_num_rows($query) > 0) {
                $no = 1;
                while($pasien = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>".$no."</td>";
                    echo "<td>".$pasien['nama']."</td>";
                    echo "<td>".$pasien['NIK']."</td>";
                    echo "<td>".$pasien['alamat']."</td>";
                    echo "<td>".$pasien['jenis_kelamin']."</td>";
                    echo "<td>".$pasien['poli']."</td>";
                    echo "<td>".$pasien['waktu_pelayanan']."</td>";
                    echo "<td>".$pasien['jenis_pembayaran']."</td>";
                    echo "<td class='text-center'>";
                    echo "<a class='btn btn-primary' href='form-edit.php?id=".$pasien['id']."'>Edit</a> ";
                    echo "<a class='btn btn-danger' onclick='confirmDelete(".$pasien['id'].")'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                    $no++; 
                }
            } else {
                echo "<tr><td colspan='10'>Tidak ada data antrian.</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <?php
    if ($query) {
        echo "<p class='text-center'>Total: " . mysqli_num_rows($query) . "</p>";
    } else {
        echo "Error: " . mysqli_error($db);
    }
    ?>
    <br>
    <a href="index.php" class="btn btn-primary">Kembali ke Beranda</a>
</body>
</html>
