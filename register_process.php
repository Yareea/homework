<?php

if (empty($_POST["fname"])) {
    $error_message = "First Name is required";
    header("Location: register.php?error=" . urlencode($error_message));
    exit();
}

if (empty($_POST["lname"])) {
    $error_message = "Last Name is required";
    header("Location: register.php?error=" . urlencode($error_message));
    exit();
}

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $error_message = "Valid email address is required";
    header("Location: register.php?error=" . urlencode($error_message));
    exit();
}

if (strlen($_POST["password"]) < 8) {
    $error_message = "Password must be at least 8 characters";
    header("Location: register.php?error=" . urlencode($error_message));
    exit();
}

if (!preg_match("/[a-z]/i", $_POST["password"])) {
    $error_message = "Password must contain at least one letter";
    header("Location: register.php?error=" . urlencode($error_message));
    exit();
}

if (!preg_match("/[0-9]/", $_POST["password"])) {
    $error_message = "Password must contain at least one number";
    header("Location: register.php?error=" . urlencode($error_message));
    exit();
}

if ($_POST["password"] !== $_POST["password_confirm"]) {
    $error_message = "Password must match";
    header("Location: register.php?error=" . urlencode($error_message));
    exit();
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

require("./utils/database.php");

$sql = "INSERT INTO users (fname, lname, email, password_hash)
        VALUES (?, ?, ?, ?)";

$stmt = $conn->stmt_init();

if (!$stmt->prepare($sql)) {
    die("SQL error: " . $conn->error);
}

$stmt->bind_param(
    "ssss",
    $_POST["fname"],
    $_POST["lname"],
    $_POST["email"],
    $password_hash
);


if ($stmt->execute()) {

    header("Location: login.php?register=success");
    exit;
} else {
    if ($mysqli->errno === 1062) {
        die("email already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}
