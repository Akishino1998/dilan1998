<?php
	include 'koneksi.php';

	$nama=$_POST['nama'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$gambar=$_POST['gambar'];

	$sql= 'INSERT INTO tb_admin (nama, username, password, gambar) VALUES ("'.$nama.'", "'.$username.'", "'.$password.'", "'.$gambar.'")';
	echo $sql;
	if ($link->query($sql) === TRUE) {
	    echo "New record created successfully";
	    header('Location: admin.php');
	} else {
	    echo "Error: " . $sql . "<br>" . $link->error;
	}	
?>