<?php
$id = $_GET['id'];

$result = mysqli_query($con, "DELETE FROM mahasiswa WHERE id=$id");
echo "<script>window.location.href = '?p=show-mahasiswa';</script>";
