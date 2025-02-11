<?php
include 'database/config.php';
session_start();

// Input sanitization, taking away any spaces
$firstName = trim($_POST['firstName']);
$surname = trim($_POST['surname']);
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$email = trim($_POST['email']);


// Validate first n last (alphanumeric)
if (!preg_match('/^[a-zA-Z0-9]+$/', $firstName)) {
    $_SESSION['status_message'] = 'firstname is not valid! Only alphanumeric characters are allowed.';
    header('Location: register');
    exit();
}
if (!preg_match('/^[a-zA-Z0-9]+$/', $surname)) {
    $_SESSION['status_message'] = 'surname is not valid! Only alphanumeric characters are allowed.';
    header('Location: register');
    exit();
}

// validate username
if (!preg_match('/^[a-zA-Z0-9]+$/', $username)) {
    $_SESSION['status_message'] = 'username not valid';
    header('Location: register');
    exit();
}


// Validate password (between 5 and 20 characters)
if (strlen($password) < 5 || strlen($password) > 30) {
    $_SESSION['status_message'] = 'Password must be between 5 and 20 characters long!';
    header('Location: register');
    exit();
}

// Validate email (basic validation, can be expanded)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['status_message'] = 'Invalid email format!';
    header('Location: register');
    exit();
}

// Check if the email already exists in the database
$stmt = $conn->prepare('SELECT id FROM users WHERE email = ?');
$stmt->bind_param('s', $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    // Username already exists
    $_SESSION['status_message'] = 'Email address already exists! Please login.';
    $stmt->close();
    header('Location: register');
    exit();
} else {
    $stmt->close();

    // email doesn't exist, insert new account
    $stmt = $conn->prepare("INSERT INTO users (username, firstName, surname, email, password, created_at, role) VALUES (?, ?, ?, ?, ?, NOW(), 'user')");
     // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    

    // Bind parameters and execute the query
    if ($stmt) {
        $stmt->bind_param('sssss',$username, $firstName, $surname,  $email, $hashed_password);
        $stmt->execute();

        // If account creation is successful
        if ($stmt->affected_rows > 0) {
            $_SESSION['status_message'] = 'Account successfully created! You can now log in.';
            header('Location: login');
        } else {
            $_SESSION['status_message'] = 'Account creation failed. Please try again later.';
            header('Location: register');
        }

        $stmt->close();
    } else {
        $_SESSION['status_message'] = 'Database error. Please try again later.';
        header('Location: register');
    }

    $conn->close();
    exit();
}
?>