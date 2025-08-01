<?php
require_once __DIR__ . '/../middleware/session.php';
require_once __DIR__ . '/../handlers/google_auth.php';
require_once __DIR__ . '/../cache/cache.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Google Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/system/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="particles" id="particles-js"></div>
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
                <img src="../images/system/mug.png" alt="Logo" class="logo">
                <?php $loginUrl = $client->createAuthUrl(); ?>
                <a href="<?= htmlspecialchars($loginUrl) ?>" class="google-signin-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"
                        viewBox="0 0 48 48">
                        <path fill="#FFC107"
                            d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                        </path>
                        <path fill="#FF3D00"
                            d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                        </path>
                        <path fill="#4CAF50"
                            d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                        </path>
                        <path fill="#1976D2"
                            d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                        </path>
                    </svg>
                    <span>Sign in with Google</span>
                </a>
            </div>
            <div class="handle"></div>
        </div>
    </div>

    <script>
        // Generate particles
        document.addEventListener('DOMContentLoaded', function() {
            const particles = document.getElementById('particles-js');
            const particleCount = window.innerWidth < 768 ? 30 : 50;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                
                // Random properties
                const size = Math.random() * 50 + 1;
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.left = `${Math.random() * 100}%`;
                particle.style.bottom = `-${size}px`;
                
                // Animation variations
                const duration = Math.random() * 15 + 10;
                particle.style.animationDuration = `${duration}s`;
                particle.style.animationDelay = `${Math.random() * 5}s`;
                
                // Color variations
                const hue = 180 + Math.random() * 20; // Teal/cyan range
                const opacity = Math.random() * 0.2 + 0.1;
                particle.style.background = `hsla(${hue}, 100%, 80%, ${opacity})`;
                particles.appendChild(particle);
            }
        });
    </script>
</body>
</html>