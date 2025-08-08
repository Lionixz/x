<?php
include('../../middleware/checkSession.php');
require_once '../../config/db.php';
require_once '../../config/config.php';

// Use PayMongo constants
// inamo remember config
$paymongoSecret = PAYMONGO_SECRET;
$returnUrl = PAYMONGO_RETURN_URL;
$cancelUrl = PAYMONGO_CANCEL_URL;


// Process credit purchase
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $amount = floatval($_POST['amount']);
    $user_id = $_SESSION['db_user_id'];
    
    if ($amount < 20) {
        $_SESSION['error'] = "Minimum purchase is ₱20";
        header("Location: ../index.php");
        exit;
    }
    
    // Calculate credits (1 PHP = 1 credits)
    $credits = $amount * 1;
    
    try {
        // Create PayMongo checkout session
        $data = [
            'data' => [
                'attributes' => [
                    'line_items' => [[
                        'currency' => 'PHP',
                        'amount' => $amount * 100,
                        'name' => 'Credits',
                        'quantity' => 1
                    ]],
                    'payment_method_types' => ['card', 'gcash'],
                    'success_url' => $returnUrl . '?session_id={CHECKOUT_SESSION_ID}',
                    'cancel_url' => $cancelUrl,
                    'description' => 'Credit Purchase',
                    'metadata' => [
                        'user_id' => $user_id,
                        'credits' => $credits
                    ]
                ]
            ]
        ];

        $ch = curl_init('https://api.paymongo.com/v1/checkout_sessions');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Authorization: Basic ' . base64_encode($paymongoSecret)
        ]);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $responseData = json_decode($response, true);
        
        if ($httpCode === 200) {
            // Record transaction
            $stmt = $mysqli->prepare("INSERT INTO buy_credits (user_id, amount, credits_added, transaction_id) VALUES (?, ?, ?, ?)");
            $sessionId = $responseData['data']['id'];
            $stmt->bind_param('idss', $user_id, $amount, $credits, $sessionId);
            $stmt->execute();
            
            // Redirect to payment
            header('Location: ' . $responseData['data']['attributes']['checkout_url']);

            // Add credit
            $update = $mysqli->prepare("UPDATE users SET user_credit = user_credit + ? WHERE id = ?");
            $update->bind_param('di', $credits, $user_id);
            $update->execute();

            exit;
        } else {
            throw new Exception("Payment gateway error: " . ($responseData['errors'][0]['detail'] ?? 'Unknown error'));
        }
    } catch (Exception $e) {
        $_SESSION['error'] = "Payment failed: " . $e->getMessage();
        header("Location: ../index.php");
        exit;
    }
}
?>