<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Mahasiswa</title>

    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        table,td,th {
            border-collapse: collapse;
            border : 1px solid #000;
        }
    </style>
</head>
<body>
    <h1 align="center">Laporan Data Mahasiswa</h1>
    <table border="1" cellpadding="10" width="100%">
        <thead>
            <tr>
                <th width="10%">NIM</th>
                <th width="30%">Nama Lengkap</th>
                <th width="30%">Alamat</th>
                <th width="15%">Email</th>
                <th width="15%">Telepon</th>
            </tr>

        </thead>
        <tbody>
            <?php
                include 'connection.php';
                $query = mysqli_query($con, "SELECT * FROM mahasiswa");
                while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $data['nim']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['telepon']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    
</body>
</html>

<script>
    window.print();
</script>