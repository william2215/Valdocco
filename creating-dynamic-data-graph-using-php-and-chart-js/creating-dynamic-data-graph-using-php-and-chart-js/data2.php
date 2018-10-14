<?php
header('Content-Type: application/json');

$conn2 = mysqli_connect("localhost","root","","valdoco");

$sqlQuery = "SELECT idDowi,Dowi,Marks FROM dowi ORDER BY idDowi";

$result = mysqli_query($conn2,$sqlQuery);
if ($result == false){
    echo json_encode("error en la consulata");
    exit();
    mysqli_close($conn2);
}

$data2 = array();
foreach ($result as $row) {
	$data2[] = $row;    
}

mysqli_close($conn2);

echo json_encode($data2);
?>