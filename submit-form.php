<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(strip_tags($_POST['name']));
    $email = htmlspecialchars(strip_tags($_POST['email'] ?? ''));
    $message = htmlspecialchars(strip_tags($_POST['message']));
    $timestamp = date('Y-m-d H:i:s');
    
    $submission = "\n=== New Submission ===\n";
    $submission .= "Date: $timestamp\n";
    $submission .= "Name: $name\n";
    $submission .= "Email: $email\n";
    $submission .= "Message: $message\n";
    $submission .= "======================\n";
    
    // Append to PHP file
    file_put_contents('submissions-data.php', $submission, FILE_APPEND | LOCK_EX);
    
    header("Location: thank-you.html");
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>