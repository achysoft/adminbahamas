<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","amband_bahamas","bahamas@123","amband_bahamas");

$sqlQuery = "SELECT id,name,messages FROM emailinbox ORDER BY id";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>