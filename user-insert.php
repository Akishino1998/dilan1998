<?php
	include 'koneksi.php';

	$nama_user=$_POST['nama_user'];
	$alamat=$_POST['alamat'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	$sql= 'INSERT INTO tb_user (nama_user, alamat, email, password) VALUES ("'.$nama_user.'", "'.$alamat.'", "'.$email.'", "'.$password.'")';
	echo $sql;
	if ($link->query($sql) === TRUE) {
	    echo "New record created successfully";
	    header('Location: user.php');
	} else {
	    echo "Error: " . $sql . "<br>" . $link->error;
	}	
?>

