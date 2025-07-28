<?php

session_start();
if (
    !isset($_SESSION['user_id']) ||
    !isset($_SESSION['user_name']) ||
    !isset($_SESSION['user_email']) ||
    !isset($_SESSION['user_picture'])
) {
    header("Location: ../public/index.php");
    exit;
}

// Add database user ID to session
if (!isset($_SESSION['db_user_id'])) {
    require_once __DIR__ . '/../config/db.php';
    $google_id = $_SESSION['user_id'];
    $stmt = $mysqli->prepare("SELECT id FROM users WHERE google_id = ?");
    $stmt->bind_param('s', $google_id);
    $stmt->execute();
    $stmt->bind_result($db_user_id);
    $stmt->fetch();
    $_SESSION['db_user_id'] = $db_user_id;
    $stmt->close();
}
?>