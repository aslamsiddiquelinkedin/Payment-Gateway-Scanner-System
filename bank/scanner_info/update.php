<?php

require_once '../config/database.php';

$id = $_POST['id'];
$utr = $_POST['utr'];
$scanner_name  = $_POST['scanner_name'];
$bank_name  = $_POST['bank_name'];
$amount =  $_POST['amount'];
$create_date = $_POST['create_date'];
$status = $_POST['status'];

$sql = "UPDATE `scanner` 
            SET   utr = ?, scanner_name = ?, bank_name = ?, amount = ?,  create_date = ?, status = ? 
            WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    'sssssss',
    $utr,
    $scanner_name,
    $bank_name,
    $amount,
    $create_date,
    $status,
    $id
);
if ($stmt->execute()) {
    echo "RECORD HAS BEEN UPDATED...";
    header('Location: index.php');
    exit;
} else {
    echo "ERROR TRY AGIAN LATER" . $stmt->error;
}
$stmt->close();
$conn->close();
