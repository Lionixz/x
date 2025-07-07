<?php
session_start();

// Redirect if session is not set
if (
    !isset($_SESSION['user_id']) ||
    !isset($_SESSION['user_name']) ||
    !isset($_SESSION['user_email']) ||
    !isset($_SESSION['user_picture'])
) {
    header("Location: ../public/index.php");
    exit;
}
