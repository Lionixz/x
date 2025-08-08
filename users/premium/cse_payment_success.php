<?php
include('../../middleware/checkSession.php');
require_once '../../config/db.php';

if (isset($_GET['session_id'])) {
    $sessionId = $_GET['session_id'];
    
    // Retrieve PayMongo session
    $ch = curl_init("https://api.paymongo.com/v1/checkout_sessions/$sessionId");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Basic ' . base64_encode($paymongoSecret)
    ]);
    
    $response = curl_exec($ch);
    $sessionData = json_decode($response, true);
    
    if ($sessionData['data']['attributes']['payment_status'] === 'paid') {
        // Update transaction status
        $stmt = $mysqli->prepare("UPDATE buy_credits SET status = 'success' WHERE transaction_id = ?");
        $stmt->bind_param('s', $sessionId);
        $stmt->execute();
        
        // Add credits to user
        $credits = $sessionData['data']['attributes']['metadata']['credits'];
        $userId = $_SESSION['db_user_id'];
        
        $update = $mysqli->prepare("UPDATE users SET user_credit = user_credit + ? WHERE id = ?");
        $update->bind_param('di', $credits, $userId);
        $update->execute();
        
        $_SESSION['success'] = "Successfully added " . number_format($credits, 1) . " credits!";
    } else {
        $_SESSION['error'] = "Payment not completed";
    }
}

header("Location: ../index.php");
exit;
?>