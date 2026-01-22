<?php
header('Content-Type: application/json');
$conn = new mysqli("localhost", "root", "", "log_system");
$result = $conn->query("SELECT reading_value, recorded_at FROM sensor_data ORDER BY id DESC LIMIT 10");
$data = [];
while($row = $result->fetch_assoc()) { $data[] = $row; }
echo json_encode(array_reverse($data));
?>