<?php
// Deduct credit when accessing a file
function deductCredit($filePath) {
    global $mysqli;
    $user_id = $_SESSION['db_user_id'];
    
    // Check if file is premium content
    if (isPremiumContent($filePath)) {
        // Deduct credit
        $mysqli->begin_transaction();
        try {
            // Verify sufficient credit
            $creditCheck = $mysqli->prepare("SELECT user_credit FROM users WHERE id = ? FOR UPDATE");
            $creditCheck->bind_param('i', $user_id);
            $creditCheck->execute();
            $creditResult = $creditCheck->get_result();
            $userCredit = $creditResult->fetch_assoc()['user_credit'];
            
            if ($userCredit < 1) {
                throw new Exception("Insufficient credits");
            }
            
            // Deduct credit
            $update = $mysqli->prepare("UPDATE users SET user_credit = user_credit - 1 WHERE id = ?");
            $update->bind_param('i', $user_id);
            $update->execute();
            
            // Record usage
            $insert = $mysqli->prepare("INSERT INTO used_credits (user_id, file_path) VALUES (?, ?)");
            $insert->bind_param('is', $user_id, $filePath);
            $insert->execute();
            
            $mysqli->commit();
            return true;
        } catch (Exception $e) {
            $mysqli->rollback();
            error_log("Credit deduction failed: " . $e->getMessage());
            return false;
        }
    }
    return true;
}

// Check if file requires credits
function isPremiumContent($filePath) {
    $premiumFiles = [
        'premium_content.php',
        'special_document.pdf',
        // Add other premium files here
    ];
    return in_array(basename($filePath), $premiumFiles);
}
?>
