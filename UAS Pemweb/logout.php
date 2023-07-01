<?php
session_start();
if (isset($_SESSION['username'])) {
    if (isset($_GET['confirm']) && $_GET['confirm'] === 'true') {
        session_unset();
        session_destroy();
        header("Location: index.php");
        exit;
    } else {
        echo '<script>
                if (confirm("Apakah Anda yakin ingin logout?")) {
                    window.location.href = "logout.php?confirm=true";
                } else {
                    window.location.href = "index.php";
                }
              </script>';
    }
} else {
    header("Location: index.php");
    exit;
}
?>
