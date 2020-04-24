<?php 
include('koneksi.php');
$id = $_GET['id'];

$sql= 'UPDATE tb_traffic_light SET tb_traffic_light.delete="Y" WHERE id_trafficlight="'.$id.'"';
	echo $sql;
	if ($link->query($sql) === TRUE) {
	    echo "New record created successfully";
	    header('Location: trafficlight.php');
	} else {
	    echo "Error: " . $sql . "<br>" . $link->error;
	}	

?>