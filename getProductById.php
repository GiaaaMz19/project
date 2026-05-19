<?php

header("Content-Type: application/json");

$conn = new mysqli(
    "localhost",
    "TU_USUARIO_DB",
    "TU_PASSWORD_DB",
    "TU_DATABASE"
);

$id = $_GET['id'];

$sql =
"SELECT * FROM products
 WHERE productID = $id";

$result = $conn->query($sql);

$product = $result->fetch_assoc();

echo json_encode($product);

?>
