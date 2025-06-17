<h1 class="mt-4">Data Mahasiswa</h1>
        <a href="?p=add-mahasiswa" class="btn btn-primary mb-4">Tambah Data</a>
        <a href="print.php" class="btn btn-warning">Cetak</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Action</th>
                </tr>

            </thead>
            <tbody>
                <?php
                    $query = mysqli_query($con, "SELECT * FROM mahasiswa");
                    while ($data = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?php echo $data['nim']; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['telepon']; ?></td>
                        <td>
                            <a class="btn btn-sm btn-success" href="?p=edit-mahasiswa&id=<?php echo $data['id']; ?>">Edit</a>
                            <a class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin mau menghapus data?')"href="?p=delete-mahasiswa&id=<?php echo $data['id']; ?>">Hapus </a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>