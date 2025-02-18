<?php
require 'database/config.php';
session_start();

if(empty($_POST['username']) || empty($_POST['password']))
{
    $_SESSION['status_message']='please input both username and password';
    header('Location: login');
    exit();
}

if($stmt = $conn->prepare('SELECT id, password, role FROM users WHERE username = ?'))
{
    $stmt->bind_param('s',$_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password, $role);
        $stmt->fetch();
        
        // Verify the entered password against the hashed password stored in the database
        if (password_verify($_POST['password'], $password)) {
            // Password is correct, regenerate session ID for security
            session_regenerate_id();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $_POST['username']; // Store the user email in session
            $_SESSION['id'] = $id; // Store the user ID in session
            $_SESSION['role'] = $role; // Store user role (admin or regular user)

            // Set a secure cookie with the email (HTTP only and Secure flag enabled)
            setcookie("username", $_POST['username'], time() + 86400, "/", "", true, true);

            // Redirect user based on their role
            if ($role == 'admin') {
                header('Location: admin'); // Redirect admin to admin dashboard
            } else {
                header('Location: user'); // Redirect regular users to user dashboard
            }
            exit();
        } else {
            // If password is incorrect, set an error message and redirect back to login page
            $_SESSION['status_message'] = 'Incorrect email or password!';
            header('Location: login');
            exit();
        }
    } else {
        // If email does not exist, set an error message and redirect to login page
        $_SESSION['status_message'] = 'Incorrect email or password';
        header('Location: login');
        exit();
    }
    
    // Close the prepared statement after execution
    $stmt->close();
} else {
    // If preparing the SQL statement fails, set an error message and redirect to login page
    $_SESSION['status_message'] = 'Login system error. Please try again later.';
    header('Location: login');
    exit();
}


?>

