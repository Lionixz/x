<?php
session_start();
require_once '../config/db.php';
if (isset($_SESSION['user_id'])) {
    $google_id = $mysqli->real_escape_string($_SESSION['user_id']);
    $mysqli->query("UPDATE users SET is_online = 0 WHERE google_id = '$google_id'");
}
session_unset();
session_destroy();
header('Location: ../public/index.php');
exit;
?>