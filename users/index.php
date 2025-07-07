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
?>

<!DOCTYPE html>
<html>
<?php include('../includes/head.php'); ?>

<body>
    <?php include('../includes/sidebar.php'); ?>
    <main>
        <div class="container">
            <img src="<?= htmlspecialchars($_SESSION['user_picture']) ?>" alt="User Picture"
                style="width: 100px; border-radius: 50%;">
            <h3><?= htmlspecialchars($_SESSION['user_name']) ?></h3>
            <p><strong>Email:</strong> <?= htmlspecialchars($_SESSION['user_email']) ?></p>
            <p><strong>Google ID:</strong> <?= htmlspecialchars($_SESSION['user_id']) ?></p>
        </div>
    </main>
    <?php include('../includes/footer.php'); ?>
</body>

</html>