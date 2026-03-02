<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Trim whitespace
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validate name (letters and spaces only)
    if (!preg_match('/^[a-zA-Z\s]+$/', $name)) {
        header('Location: index.php?error=invalid_name');
        exit();
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: index.php?error=invalid_email');
        exit();
    }

    // Limit lengths
    $name = substr($name, 0, 100);
    $email = substr($email, 0, 100);
    $message = substr($message, 0, 1000);

    // Sanitize
    $name = htmlspecialchars(strip_tags($name));
    $email = htmlspecialchars(strip_tags($email));
    $message = htmlspecialchars(strip_tags($message));

    $timestamp = date('Y-m-d H:i:s');
    $submission = "Date: $timestamp\n";
    $submission .= "Name: $name\n";
    $submission .= "Email: $email\n";
    $submission .= "Message: $message\n\n";

    file_put_contents('submissions-data.php', $submission, FILE_APPEND | LOCK_EX);
    header('Location: index.php');
    exit();
} else {
    header('Location: index.php');
    exit();
}
?>
