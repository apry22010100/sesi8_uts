<h3>Tambah Data User</h3>
<form method="POST" action="DataMahasiswa.php">
    <input type="hidden" name="act" value="store">
    <div class="form-floating mb-3">
        <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="Nama Lengkap">
        <label for="floatingInput">Nama Lengkap</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txNIM" class="form-control" id="floatingInput" placeholder="Alamat Email">
        <label for="floatingInput">Nim</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txJURUSAN" class="form-control" id="floatingInput" placeholder="User Name">
        <label for="floatingInput">Jurusan</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txALAMAT" class="form-control" id="floatingInput" placeholder="Alamat">
        <label for="floatingInput">Alamat</label>
    </div>
    </div>
    <div class="form-floating mb-3">
        &nbsp;
    </div>
    <button type="submit" class="btn btn-primary"> Buat Data User </button>
    <a href="DataMahasiswa.php" class="btn btn-secondary"> Batal </a>
</form>