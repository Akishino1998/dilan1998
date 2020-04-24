<?php
	include 'koneksi.php';

	$gambar=$_POST['gambar'];
	$ket_galeri=$_POST['ket_galeri'];
	$nama_trafficlight=$_POST['nama_trafficlight'];

	$sql= 'INSERT INTO tb_galeri (gambar, ket_galeri, nama_trafficlight) VALUES ("'.$gambar.'", "'.$ket_galeri.'", "'.$nama_trafficlight.'")';
	echo $sql;
	if ($link->query($sql) === TRUE) {
	    echo "New record created successfully";
	    header('Location: galeri.php');
	} else {
	    echo "Error: " . $sql . "<br>" . $link->error;
	}	
?>