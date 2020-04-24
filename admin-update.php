<?php
	include 'koneksi.php';
	$id_admin = $_POST['id_admin'];
	$nama=$_POST['nama'];	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$gambar=$_POST['gambar'];
// kita querykan untuk update
	$sql = "UPDATE tb_admin SET nama='".$nama."', username='".$username."', password='".$password."', gambar='".$gambar."' WHERE id_admin='".$id_admin."'";

	if ($link->query($sql) === TRUE) {
	    echo "New record update successfully";
	    header('Location: admin.php');
	} else {
	    echo "Error: " . $sql . "<br>" . $link->error;
	}	
?>