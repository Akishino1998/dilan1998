<?php
	include 'koneksi.php';

	$nama_kondisi=$_POST['nama_kondisi'];

	$sql= 'INSERT INTO tb_kondisi (nama_kondisi) VALUES ("'.$nama_kondisi.'")';
	echo $sql;
	if ($link->query($sql) === TRUE) {
	    echo "New record created successfully";
	    header('Location: kondisi.php');
	} else {
	    echo "Error: " . $sql . "<br>" . $link->error;
	}	
?>