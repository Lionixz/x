<?php
$mysqli = require 'db.php';
$result = $mysqli->query("SELECT name, email, is_online, last_seen FROM users ORDER BY is_online DESC, last_seen DESC");
?>
<!DOCTYPE html>
<html>

<head>
    <title>User Status</title>
</head>

<body>
    <h2>All Users</h2>
    <table border="1" cellpadding="8">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Status</th>
            <th>Last Seen</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['name']) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td><?= $row['is_online'] ? '🟢 Online' : '🔴 Offline' ?></td>
                <td><?= $row['last_seen'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
    <a href="index.php">← Back</a>
</body>

</html>