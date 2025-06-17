<?php
$id = $_GET['id'];
$result = mysqli_query($con, "SELECT * FROM mahasiswa WHERE id=$id");
while ($data = mysqli_fetch_array($result)) {
  $nim = $data['nim'];
  $nama = $data['nama'];
  $alamat = $data['alamat'];
  $email = $data['email'];
  $telepon = $data['telepon'];
}



if (isset($_POST['submit'])) {
  $nim = $_POST['nim'];
  $nama = $_POST['namaLengkap'];
  $alamat = $_POST['alamat'];
  $email = $_POST['email'];
  $telepon = $_POST['telepon'];
  $result = mysqli_query($con, "UPDATE mahasiswa SET nim='$nim',nama='$nama',alamat='$alamat',email='$email',telepon='$telepon'
                                WHERE id=$id");
  echo "<script>window.location.href ='?p=show-mahasiswa';</script>";
}
?>

<h1 class="mt-4">Edit Data Mahasiswa</h1>
<form method="post">
<div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input type="text" class="form-control" name="nim" value="<?php echo $nim ?>">
</div>
<div class="mb-3">
    <label for="namaLengkap" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control" name="namaLengkap" value="<?php echo $nama ?>">
</div>
<div class="mb-3">
    <label for="Alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat" value="<?php echo $alamat ?>">
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" value="<?php echo $email ?>">
</div>
<div class="mb-3">
    <label for="telepon" class="form-label">Telepon</label>
    <input type="number" class="form-control" name="telepon" value="<?php echo $telepon ?>">
</div>

<input type="submit" value="Simpan" name="submit" class="btn btn-primary">
<a href="?p=show-mahasiswa" class="btn btn-warning">Kembali</a>
</form>