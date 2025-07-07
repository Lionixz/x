<?php
session_start();
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../config/db.php';
if (isset($_GET['code']) && !isset($_SESSION['access_token'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    var_dump($token);
    if (!isset($token['error'])) {
        $client->setAccessToken($token['access_token']);
        $_SESSION['access_token'] = $token['access_token'];
        $oauth = new Google_Service_Oauth2($client);
        $user = $oauth->userinfo->get();
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_email'] = $user->email;
        $_SESSION['user_name'] = $user->name;
        $_SESSION['user_picture'] = $user->picture;
        $google_id = $mysqli->real_escape_string($user->id);
        $name = $mysqli->real_escape_string($user->name);
        $email = $mysqli->real_escape_string($user->email);
        $picture = $mysqli->real_escape_string($user->picture);
        $res = $mysqli->query("SELECT id, role FROM users WHERE google_id = '$google_id'");
        if ($res) {
            var_dump($res->fetch_assoc());
        } else {
            echo "Error with query: " . $mysqli->error;
        }
        if ($res->num_rows === 0) {
            $mysqli->query("INSERT INTO users (google_id, name, email, picture, role, is_online, last_seen)
                            VALUES ('$google_id', '$name', '$email', '$picture', 'user', 1, NOW())");
            $role = 'user';
        } else {
            $row = $res->fetch_assoc();
            $role = $row['role'];
            $mysqli->query("UPDATE users SET is_online = 1, last_seen = NOW() WHERE google_id = '$google_id'");
        }
        $_SESSION['role'] = $role;
        var_dump($role);
        if ($role === 'admin') {
            header("Location: ../admin/index.php");
            exit;
        } else {
            header("Location: ../users/index.php");
            exit;
        }
    } else {
        echo "Error fetching token: " . $token['error'];
    }
}
if (isset($_SESSION['access_token'])) {
    $client->setAccessToken($_SESSION['access_token']);
}
