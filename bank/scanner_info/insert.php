<?php

require_once '../config/database.php';

$utr = $_POST['utr'];
$scanner_name  = $_POST['scanner_name'];
$bank_name  = $_POST['bank_name'];
$amount =  $_POST['amount'];
$create_date = $_POST['create_date'];
$status = $_POST['status'];

$sql = "INSERT INTO `scanner` (utr,scanner_name,bank_name,amount,create_date,status) 
            VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    'ssssss',
    $utr,
    $scanner_name,
    $bank_name,
    $amount,
    $create_date,
    $status
);
if ($stmt->execute()) {
    echo "RECORD HAS BEEN SAVED";
    header('Location: index.php');
    exit;
} else {
    echo "ERROR TRY AGIAN LATER" . $stmt->error;
}
$stmt->close();
$conn->close();
