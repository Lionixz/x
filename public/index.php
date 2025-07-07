<?php
require_once __DIR__ . '/../middleware/session.php';
require_once __DIR__ . '/../handlers/google_auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Google Login</title>
    <link rel="icon" href="../images/system/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/login.css">

</head>

<body>
    <div class="container">
        <div class="plate"></div>
        <div class="cup">
            <div class="top">
                <div class="vapour">
                    <?php for ($i = 1; $i <= 19; $i++): ?>
                        <span style="--i:<?= $i ?>;"></span>
                    <?php endfor; ?>
                </div>
                <div class="circle">
                    <div class="tea"></div>
                </div>
            </div>

            <div class="mug">
                <!-- Your Logo -->
                <img src="../images/system/mug.png" alt="Logo" class="logo">

                <!-- Google Sign In Button -->
                <?php $loginUrl = $client->createAuthUrl(); ?>
                <a href="<?= htmlspecialchars($loginUrl) ?>" class="google-signin-btn">
                    <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" alt="Google logo">
                    <span>Sign in with Google</span>
                </a>
            </div>

            <div class="handle"></div>
        </div>
    </div>
</body>

</html>