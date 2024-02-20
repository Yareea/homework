<?php
@ob_start();
session_start();

require('./utils/database.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve user inputs
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = sprintf(
        "SELECT * FROM users
                        WHERE email = '%s'",
        $conn->real_escape_string($email)
    );

    $result = $conn->query($sql);
    $user = $result->fetch_assoc();

    // Validate user credentials
    if ($user) {
        if (password_verify($_POST["password"], $user["password_hash"])) {
            // Successful login
            $_SESSION["email"] = $email; // Store username in session for future use

            // Redirect to the dashboard or another protected page
            header("Location: index.php");
            ob_flush();
            exit();
        } else {
            // Invalid login credentials
            $error_message = "Invalid username or password. Please try again.";
            header("Location: login.php?error=" . urlencode($error_message));
            ob_flush();
            exit();
        }
    } else {
        // Invalid login credentials
        $error_message = "Invalid username or password. Please try again.";
        header("Location: login.php?error=" . urlencode($error_message));
        ob_flush();
        exit();
    }
} else {
    // Redirect to the login page if accessed directly without submitting the form
    header("Location: login.php");
    ob_flush();
    exit();
}
