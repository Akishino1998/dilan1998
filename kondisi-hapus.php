<?php 
include('koneksi.php');
$id_kondisi = $_GET['id'];
$sql = "DELETE FROM tb_kondisi WHERE id_kondisi='".$id_kondisi."'";
	echo $sql;
	if ($link->query($sql) === TRUE) {
	    echo "delete record  successfully";
	    header('Location: kondisi.php'); 
	} else {
	    echo "Error: " . $sql . "<br>" . $link->error;
	}	
?>