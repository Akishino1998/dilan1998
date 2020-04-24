<?php 
include('koneksi.php');
$id_admin = $_GET['id'];
$sql = "DELETE FROM tb_admin  WHERE id_admin='".$id_admin."'";
	echo $sql;
	if ($link->query($sql) === TRUE) {
	    echo "delete record  successfully";
	    header('Location: admin.php');
	} else {
	    echo "Error: " . $sql . "<br>" . $link->error;
	}	
?>