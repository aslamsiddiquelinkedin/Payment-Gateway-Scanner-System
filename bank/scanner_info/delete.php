<?php

require_once '../config/database.php';

if (!isset($_GET['id'])) {
    die("SCANNER ID IS REQUIRED....");
}


$id = (int) $_GET['id'];

$sql = "DELETE FROM `scanner` WHERE id=? ";

$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);

if ($stmt->execute()) {
    echo "SCANNER DATA HAS BEEN DELETED....";
    header("Location: index.php");
    exit();
} else {
    echo "PLEASE CHECK SOME ERROR" . $stmt->error;
}

$stmt->close();
$conn->close();
