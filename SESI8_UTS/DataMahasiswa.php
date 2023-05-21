<?php
include("Konfigurasi.php");

$jdpage = "List";
$pg = "mahasiswalist.php";
$footer = "";

$cnn = $mysqli_connect (DBHOST, DBUSER, DBPASS, DBNAME, DBPORT) or die("Gagal koneksi ke DBMS");

if (isset($_POST["act"])) {
    $act = $_POST["act"];
    switch ($act) {
        case "store":
            $nama = $_POST["txNAMA"];
            $nim = $_POST["txNIM"];
            $jurusan = $_POST["txJURUSAN"];
            $alamat = $_POST["txALAMAT"];
            
            $sql = "INSERT INTO tb_mhs (nama, nim, jurusan, alamat) Value ('$nama', '$nim', '$jurusan', '$alamat')";
            $hasil = mysqli_query($cnn, $sql);
            if ($hasil) {
                $footer = "<script>
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Data mahasiswa berhasil ditambahkan',
                        showConfirmButton: false,
                        timer: 1500
                    });
                </script>";
            } else {
                $footer = "<script>
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Data mahasiswa gagal ditambahkan',
                        showConfirmButton: false,
                        timer: 1500
                    });
                </script>";
            }
            break;
        case "update":
            $nama = $_POST["txNAMA"];
            $nim = $_POST["txNIM"];
            $jurusan = $_POST["txJURUSAN"];
            $alamat = $_POST["txALAMAT"];
            $idmahasiswa = $_POST["idmahasiswa"];
            
            $sql = "UPDATE tb_mhs SET nama='$nama', nim='$nim', jurusan='$jurusan', alamat='$alamat' WHERE idmahasiswa='$idmahasiswa';";
            $hasil = mysqli_query($cnn, $sql);
            if ($hasil) {
                $footer = "<script>
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Data mahasiswa berhasil diperbarui',
                        showConfirmButton: false,
                        timer: 1500
                    });
                </script>";
            } else {
                $footer = "<script>
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Data mahasiswa gagal diperbarui',
                        showConfirmButton: false,
                        timer: 1500
                    });
                </script>";
            }
            break;
        case "destroy":
            $idmahasiswa = $_POST['idmahasiswa'];
            $sql = "DELETE FROM tb_mhs WHERE idmahasiswa='$idmahasiswa';";
            $hasil = mysqli_query($cnn, $sql);
            if ($hasil) {
                $footer = "<script>
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Data mahasiswa berhasil dihapus',
                        showConfirmButton: false,
                        timer: 1500
                    });
                </script>";
            } else {
                $footer = "<script>
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Data mahasiswa gagal dihapus',
                        showConfirmButton: false,
                        timer: 1500
                    });
                </script>";
            }
            break;
    }
}

if (isset($_GET["aksi"])) {
    $aksi = $_GET["aksi"];
    switch ($aksi) {
        case "new":
            $jdpage = "Tambah";
            $pg = "mahasiswanew.php";
            break;
        case "edit":
            $jdpage = "Ubah";
            $pg = "mahasiswaedit.php";
            break;
        case "del":
            $jdpage = "Hapus";
            $pg = "mahasiswadel.php";
            break;
        default:
            $jdpage = "List";
            $pg = "mahasiswalist.php";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title><?=$jdpage?> - Data Mahasiswa</title>
</head>
<body>
    <div class="container">
        <h1><?=$jdpage?> Data Mahasiswa</h1>
        <?php include($pg); ?>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    -->

    <?=$footer;?>
</body>
</html>
