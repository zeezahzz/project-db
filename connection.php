<?php 
	$databaseHost 		= "localhost";
	$databaseName		= "web2ti4e";
	$databaseUsername 	= "root";
	$databasePassword	= "";
	// $databasePassword	= ""; untuk windows password dikosongkan

	$con = mysqli_connect("$databaseHost","$databaseUsername","$databasePassword","$databaseName");

	if (mysqli_connect_errno()) {
		echo "<h1>Koneksi database error : " . mysqli_connect_errno() . "</h1>";
	}
?>