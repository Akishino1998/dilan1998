<?php
	include 'koneksi.php';
	$id_kondisi = $_POST['id_kondisi'];
	$nama_kondisi=$_POST['nama_kondisi'];
// kita querykan untuk update
	$sql = "UPDATE tb_kondisi SET nama_kondisi='".$nama_kondisi."' WHERE id_kondisi='".$id_kondisi."'";

	if ($link->query($sql) === TRUE) {
	    echo "New record update successfully";
	    header('Location: kondisi.php');
	} else {
	    echo "Error: " . $sql . "<br>" . $link->error;
	}	
?>