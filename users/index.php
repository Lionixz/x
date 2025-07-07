<?php
include('../middleware/checkSession.php');
include('../cache/cache.php');
?>

<!DOCTYPE html>
<html>

<?php includeAndCache('../includes/head.php', '../cache/head.php'); ?>

<body>
    <?php includeAndCache('../includes/sidebar.php', '../cache/sidebar.php'); ?>
    <main>
        <div class="container">
            <img src="<?= htmlspecialchars($_SESSION['user_picture']) ?>" alt="User Picture"
                style="width: 100px; border-radius: 50%;">
            <h3><?= htmlspecialchars($_SESSION['user_name']) ?></h3>
            <p><strong>Email:</strong> <?= htmlspecialchars($_SESSION['user_email']) ?></p>
            <p><strong>Google ID:</strong> <?= htmlspecialchars($_SESSION['user_id']) ?></p>
        </div>
    </main>
    <?php includeAndCache('../includes/footer.php', '../cache/footer.php'); ?>
</body>

</html>