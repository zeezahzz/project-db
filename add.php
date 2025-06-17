<?php  	
	if(isset($_POST['submit'])) {
		$nim 	    = $_POST['nim'];
		$nama 	    = $_POST['namaLengkap'];
		$alamat     = $_POST['alamat'];
        $email      = $_POST['email'];
        $telepon    = $_POST['telepon'];

    // panggil file connection
    include "connection.php";

    // proses simpan data mahasiswa
    $result = mysqli_query($con, "INSERT INTO mahasiswa(nim,nama,alamat,email,telepon) VALUES('$nim','$nama','$alamat','$email','$telepon')");

    // redirect halaman
    header("Location: index.php"); 
	}
?>


<h1 class="mt-4">Tambah Data Mahasiswa</h1>
<form method="post">
<div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input type="text" class="form-control" name="nim">
</div>
<div class="mb-3">
    <label for="namaLengkap" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control" name="namaLengkap">
</div>
<div class="mb-3">
    <label for="Alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat">
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email">
</div>
<div class="mb-3">
    <label for="telepon" class="form-label">Telepon</label>
    <input type="number" class="form-control" name="telepon">
</div>

<input type="submit" value="Simpan" name="submit" class="btn btn-primary">
<a href="?p=show-mahasiswa" class="btn btn-warning">Kembali</a>
</form>
