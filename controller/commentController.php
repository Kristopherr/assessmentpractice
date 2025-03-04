<?php
include 'database/config.php';
session_start();
$blogId = $_GET['bid'];
$userId = $_GET['uid'];

$insertComment = $conn->prepare("INSERT INTO comments (comment, blogID, userID) VALUES (?, ?, ?)");

// Bind parameters to prevent SQL injection
$insertComment->bind_param("sii", $_POST['comment'], $blogId, $userId);

// Execute the query
if ($insertComment->execute()) {
    $_SESSION['status_message'] = "Comment added successfully!";
} else {
    $_SESSION['status_message'] = "Error: " . $conn->error;
}

// Close statement
$insertComment->close();
        
    

    // Redirect back to the blog page
    header("Location: blogInfo?bid=" . $blogId);
    exit();
?>