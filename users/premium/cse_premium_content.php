
<style>
    .credit-warning-container {
        max-width: 480px;
        margin: 100px auto;
        padding: 30px;
        background: linear-gradient(145deg, #1e1e2f, #2a2a40);
        border: 1px solid #3e3e5e;
        border-radius: 12px;
        font-family: 'Segoe UI', 'Roboto', sans-serif;
        color: #f5f5f7;
        text-align: center;
        box-shadow: 0 0 15px rgba(93, 121, 255, 0.3);
    }

    .credit-warning-container h2 {
        margin-bottom: 15px;
        font-size: 24px;
        font-weight: 600;
        color: #9cc6ff;
    }

    .credit-warning-container p {
        font-size: 16px;
        margin-bottom: 20px;
        color: #d2d2e0;
    }

    .credit-warning-container a {
        display: inline-block;
        padding: 12px 24px;
        background: linear-gradient(90deg, #5e63ff, #8298ff);
        color: #ffffff;
        font-weight: 500;
        border-radius: 8px;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 0 10px rgba(130, 152, 255, 0.4);
    }

    .credit-warning-container a:hover {
        background: linear-gradient(90deg, #4c50e0, #6a80ff);
        box-shadow: 0 0 12px rgba(130, 152, 255, 0.6);
        transform: translateY(-2px);
    }
</style>




<?php
require_once 'cse_credit_functions.php';
if (!deductCredit(__FILE__)) {
    echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insufficient Credits</title>
    <link rel="stylesheet" href="credit-style.css">
</head>
<body>
<div class="credit-warning-container">
    <h2>⚠️ Insufficient Credits</h2>
    <p>You need more credits to continue using this feature.</p>
    <a href="index.php">🔄 Buy More Credits</a>
</div>

</body>
</html>
HTML;
    exit;
}
?>