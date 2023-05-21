<h3>Daftar Mahasiswa</h3>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Nim</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Alamat</th>
      <th scope="col"><a href="DataMahasiswa.php?aksi=new" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i>&nbsp;Tambah</a></th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT tm.nama, tm.nim, tm.jurusan, tm.alamat, tm.idmahasiswa FROM tb_mhs tm ORDER BY tm.nama;";
    $hasil = mysqli_query($cnn, $sql);
    $cx = 0;
    while($h = mysqli_fetch_assoc($hasil)){
        $cx++;
    ?>    
    <tr>
        <th scope="row"><?=$cx?></th>
        <td><?=$h["nama"]?></td>
        <td><?=$h["nim"]?></td>
        <td><?=$h["jurusan"]?></td>
        <td><?=$h["alamat"]?></td>
        <td>
            <a href="DataMahasiswa.php?aksi=edit&p1=<?=$h["idmahasiswa"]?>" class="btn btn-warning"><i class="fa-solid fa-user-pen"></i>&nbsp;Edit</a> 
            <a href="DataMahasiswa.php?aksi=del&p1=<?=$h["idmahasiswa"]?>" class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i>&nbsp;Del</a>
        </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
