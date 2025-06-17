<?php 
include 'header.php';
include 'connection.php';
// error_reporting(0);
switch ($_GET['p']) {
    case 'show-mahasiswa':
        include 'show.php';
        break;
    case 'add-mahasiswa':
        include 'add.php';
        break;
    case 'delete-mahasiswa':
        include 'delete.php';
        break;
    case 'dashboard':
        include 'dashboard.php';
        break;
    case 'edit-mahasiswa':
        include 'edit.php';
        break;
    default:
        echo '<script>window.location.href= "?p=dashboard"</script>';
        break;
}
?>


       
   
