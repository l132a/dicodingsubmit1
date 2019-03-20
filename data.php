<?php
    include "koneksi.php";
	$sql_select = "SELECT * FROM person";
    $stmt = $conn->query($sql_select);
	$registrants = $stmt->fetchAll();
	if(count($registrants) > 0) {
		echo json_encode($registrants);
	}else{
		echo "<h3>No one is currently registered.</h3>";
	}
?>