<?php
// Connect to the database
include_once 'connection.php';

// Get the data from the POST request
$branchCode = $_POST['branchCode'];
$invoiceDate = $_POST['invoiceDate'];
$teamLeaderCode = $_POST['teamLeaderCode'];
$premiumAmount = $_POST['premiumAmount'];
$agentSignature = $_POST['agentSignature'];
$supervisorCode = $_POST['supervisorCode'];
$salesAgentCode = $_POST['salesAgentCode'];
$policyNumber = $_POST['policyNumber'];
$paymentFrequent = $_POST['paymentFrequent'];
$cashHandedOverDate = $_POST['cashHandOverDate'];


// Insert the data into the database
$query = "INSERT INTO invoice(brId, IssueDate, amount,supervisorId, saleId, policyNumber, paymentFreq, cashHandOverDate,agentSignature,teamLeaderCode) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?)";
$stmt = $conn->prepare($query);
$stmt->execute([$branchCode, $invoiceDate, $premiumAmount,$supervisorCode, $salesAgentCode, $policyNumber, $paymentFrequent, $cashHandedOverDate,$agentSignature,$teamLeaderCode]);

$res="";
// Check if the row was inserted successfully
if ($stmt->rowCount() > 0) {
    $res= "success";
} else {
    $res = "not success";
    echo 'Error: No row inserted';
}

header('Content-type: application/json');
echo json_encode($res);
// Close the database connection
$conn = null;
?>