<?php 
include('koneksi.php');
$id_user = $_GET['id'];
$sql = "DELETE FROM tb_user  WHERE id_user='".$id_user."'";
	echo $sql;
	if ($link->query($sql) === TRUE) {
	    echo "delete record  successfully";
	    header('Location: user.php');
	} else {
	    echo "Error: " . $sql . "<br>" . $link->error;
	}	
?>us