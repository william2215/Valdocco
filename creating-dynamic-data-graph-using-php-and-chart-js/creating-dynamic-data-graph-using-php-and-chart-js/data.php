<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","valdoco");

$sqlQuery = "SELECT idClasificacion,Clasificacion,Marks FROM Clasificacion ORDER BY idClasificacion";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>