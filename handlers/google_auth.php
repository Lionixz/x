<?php
session_start();
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../config/db.php';

// Check if the user is already logged in
if (isset($_SESSION['access_token'])) {
    $client->setAccessToken($_SESSION['access_token']);

    // If the token is expired, try refreshing it
    if ($client->isAccessTokenExpired()) {
        // Attempt to refresh the token if it's expired
        $refreshToken = $client->getRefreshToken();
        if ($refreshToken) {
            $client->fetchAccessTokenWithRefreshToken($refreshToken);
            $_SESSION['access_token'] = $client->getAccessToken();
        } else {
            // If no refresh token, clear session and force login
            session_unset();
            session_destroy();
            header("Location: login.php");
            exit;
        }
    }
}

// If not logged in via Google, handle the authorization flow
if (isset($_GET['code']) && !isset($_SESSION['access_token'])) {
    try {
        // Fetch the access token using the code from the URL
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

        // If there's no error in the token
        if (!isset($token['error'])) {
            $client->setAccessToken($token['access_token']);
            $_SESSION['access_token'] = $token['access_token'];

            // Fetch user information
            $oauth = new Google_Service_Oauth2($client);
            $user = $oauth->userinfo->get();

            // Save user info to session
            $_SESSION['user_id'] = $user->id;
            $_SESSION['user_email'] = $user->email;
            $_SESSION['user_name'] = $user->name;
            $_SESSION['user_picture'] = $user->picture;

            // Escape user data for use in SQL queries
            $google_id = $mysqli->real_escape_string($user->id);
            $name = $mysqli->real_escape_string($user->name);
            $email = $mysqli->real_escape_string($user->email);
            $picture = $mysqli->real_escape_string($user->picture);

            // Check if the user exists in the database
            $res = $mysqli->query("SELECT id, role FROM users WHERE google_id = '$google_id'");

            if ($res) {
                // User found, fetch role
                if ($res->num_rows === 0) {
                    // User not found, create a new account
                    $mysqli->query("INSERT INTO users (google_id, name, email, picture, role, is_online, last_seen) 
                                    VALUES ('$google_id', '$name', '$email', '$picture', 'user', 1, NOW())");
                    $role = 'user';
                } else {
                    // User found, update status
                    $row = $res->fetch_assoc();
                    $role = $row['role'];
                    $mysqli->query("UPDATE users SET is_online = 1, last_seen = NOW() WHERE google_id = '$google_id'");
                }

                // Set role in session
                $_SESSION['role'] = $role;

                // Redirect based on the user's role
                if ($role === 'admin') {
                    header("Location: ../admin/index.php");
                } else {
                    header("Location: ../users/index.php");
                }
                exit;
            } else {
                echo "Error with query: " . $mysqli->error;
            }
        } else {
            echo "Error fetching token: " . $token['error'];
        }
    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }
}
