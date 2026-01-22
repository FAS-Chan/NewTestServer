<?php
$conn = new mysqli("localhost", "root", "", "log_system");
if ($_POST['value']) {
    $val = $_POST['value'];
    $conn->query("INSERT INTO sensor_data (reading_value) VALUES ('$val')");
    echo "Success";
}
?>