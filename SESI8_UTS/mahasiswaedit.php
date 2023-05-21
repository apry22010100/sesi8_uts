<?php
    $idmahasiswa = $_GET["p1"];
    $sql = "SELECT tm.nama, tm.nim, tm.jurusan, tm.alamat, tm.idmahasiswa FROM tb_mhs tm WHERE tm.idmahasiswa='$idmahasiswa';";
    $hasil = mysqli_query($cnn, $sql);
    if(mysqli_num_rows($hasil) > 0){
        $h = mysqli_fetch_assoc($hasil);
?>
<h3>Ubah Data Mahasiswa <?=$h["nim"]?></h3>
<form method="POST" action="datamahasiswa.php">
    <input type="hidden" name="act" value="update">
    <input type="hidden" name="idmahasiswa" value="<?=$idmahasiswa?>">
    <div class="form-floating mb-3">
        <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="Nama Lengkap" value="<?=$h["nama"]?>">
        <label for="floatingInput">Nama Lengkap</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txNIM" class="form-control" id="floatingInput" placeholder= "NIM " value="<?=$h["nim"]?>">
        <label for="floatingInput">Nim</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txJURUSAN" class="form-control" id="floatingInput" placeholder="Jurusan" value="<?=$h["jurusan"]?>">
        <label for="floatingInput">Jurusan</label>
    </div>
    <div class="form-floating mb-3">
        <input type=" text" name="txALAMAT" class="form-control" id="floatingInput" placeholder="alamat" value="<?=$h["alamat"]?>">
        <label for="floatingInput">Alamat</label>
    </div>
    <div class="form-floating mb-3">
        &nbsp;
    </div>
    <button type="submit" class="btn btn-primary"> Ubah Data Mahasiswa </button>
    <a href="DataMahasiswa.php" class="btn btn-secondary"> Batal </a>
</form>
<?php
    } else {
        echo "<script>window.location.href='DataMahasiswa.php';</script>";
    }
?>
