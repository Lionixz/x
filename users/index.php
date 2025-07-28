<?php
include('../middleware/checkSession.php');
include('../cache/cache.php');
?>
<!DOCTYPE html>
<html>
<?php includeAndCache('../includes/head.php'); ?>
<body>
    <?php includeAndCache('../includes/sidebar.php'); ?>
    <main>
        <div class="container">
            <img src="<?= htmlspecialchars($_SESSION['user_picture']) ?>" alt="User Picture"
                style="width: 100px; border-radius: 50%;">
            <h3><?= htmlspecialchars($_SESSION['user_name']) ?></h3>
            <p><strong>Email:</strong> <?= htmlspecialchars($_SESSION['user_email']) ?></p>
            <p><strong>Google ID:</strong> <?= htmlspecialchars($_SESSION['user_id']) ?></p>
            <?php
            $mysqli = require '../config/db.php'; 
            $user_id = $_SESSION['db_user_id'];
            $sql = "SELECT user_credit FROM users WHERE id = ?";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param('i', $user_id);
            $stmt->execute();
            $stmt->bind_result($user_credit);
            $stmt->fetch();
            echo "<p><strong>Credit Balance:</strong> " . number_format($user_credit, 2) . " credits</p>";
            $stmt->close();
            ?>
            <div class="credit-purchase">
                <h4>Buy More Credits</h4>
                <form action="buy_credits.php" method="post">
                    <div class="form-group">
                        <label>Amount (PHP):</label>
                        <input type="number" name="amount" min="20" step="1" required 
                               placeholder="Minimum ₱20">
                    </div>
                    <p>1 PHP = 4 credits</p>
                    <button type="submit" class="btn">Purchase Credits</button>
                </form>
            </div>
        </div>
    </main>
<?php includeAndCache('../includes/footer.php'); ?>
