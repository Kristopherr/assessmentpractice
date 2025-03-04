<?php
include 'database/config.php';
session_start();

// Ensure that the cid is sanitized or validated as an integer
$cid = isset($_GET['cid']) ? (int) $_GET['cid'] : 0;

// Prepare the statement with a placeholder
    $reject = $conn->prepare("UPDATE comments SET status = 'Rejected' WHERE commentID = ?");
        
    // Bind the parameter (i = integer)
    $reject->bind_param("i", $cid);

    // Execute the query
    if ($reject->execute()) {
        $_SESSION['status_message'] = "Rejected successfully!";
    } else {
        $_SESSION['status_message'] = "Error: " . $conn->error;
    }

    // Close the statement
    $reject->close();

    // Redirect back to the comments page
header("Location: comments");
exit();
?>