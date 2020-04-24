<?php
	include 'koneksi.php';

	$nama_trafficlight=$_POST['nama_trafficlight'];
	$alamat=$_POST['alamat'];
	$fitur=$_POST['fitur'];
	$kondisi=$_POST['kondisi'];
	$keterangan=$_POST['keterangan'];
	$latitude=$_POST['latitude'];
	$longitude=$_POST['longitude'];			
	$sql= 'INSERT INTO tb_traffic_light (nama_trafficlight, alamat, fitur, kondisi, keterangan, latitude, longitude) VALUES ("'.$nama_trafficlight.'", "'.$alamat.'", "'.$fitur.'", "'.$kondisi.'", "'.$keterangan.'", "'.$latitude.'", "'.$longitude.'")';
	echo $sql;
	if ($link->query($sql) === TRUE) {
	    echo "New record created successfully";
	    header('Location: trafficlight.php');
	} else {
	    echo "Error: " . $sql . "<br>" . $link->error;
	}	
?>

