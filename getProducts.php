<?php

header("Content-Type: application/json");

$conn = new mysqli(
    "localhost",
    "TU_USUARIO_DB",
    "TU_PASSWORD_DB",
    "TU_DATABASE"
);

$sql = "SELECT * FROM products";

$result = $conn->query($sql);

$data = array();

while($row = $result->fetch_assoc()) {

    $data[] = $row;
}

echo json_encode($data);

?>
