<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Antrian Puskesmas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <header class="text-center">
        <h3>Antrian Pasien Puskesmas Hari ini</h3>
    </header>
    <div class="container mt-4">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Poli</th>
                    <th>Waktu Pelayanan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM antrian_puskesmas ORDER BY id ASC";
                $query = mysqli_query($db, $sql);
                if ($query && mysqli_num_rows($query) > 0) {
                    $no = 1;
                    while ($pasien = mysqli_fetch_array($query)) {
                        echo "<tr>";
                        echo "<td>" . $no . "</td>";
                        echo "<td>" . $pasien['nama'] . "</td>";
                        echo "<td>" . $pasien['poli'] . "</td>";
                        echo "<td>" . $pasien['waktu_pelayanan'] . "</td>";
                        echo "</tr>";
                        $no++;
                    }
                } else {
                    echo "<tr><td colspan='4'>Tidak ada data antrian.</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <?php
        if ($query) {
            echo "<p>Total: " . mysqli_num_rows($query) . "</p>";
        } else {
            echo "Error: " . mysqli_error($db);
        }
        ?>
        <br>
        <a href="index.php" class="btn btn-primary" class="mt-3">Kembali ke Beranda</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
