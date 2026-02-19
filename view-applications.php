<?php
$password = "password"; // TODO: make this not just "password"

if (!isset($_POST['password']) || $_POST['password'] !== $password) {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>View Submissions</title>
        <style>
            body { font-family: sans-serif; max-width: 400px; margin: 100px auto; }
            input, button { padding: 10px; margin: 5px 0; width: 100%; }
        </style>
    </head>
    <body>
        <h2>Admin Login</h2>
        <form method="POST">
            <input type="password" name="password" placeholder="Enter password" required>
            <button type="submit">Login</button>
        </form>
    </body>
    </html>
    <?php
    exit();
}

// Show submissions
echo "<style>body { font-family: monospace; white-space: pre-wrap; padding: 20px; }</style>";
echo "<h2>Form Submissions</h2>";
echo "<a href='view-submissions.php'>Logout</a><hr>";

$file = 'submissions-data.php';
if (file_exists($file)) {
    $content = file_get_contents($file);
    // Strip the PHP protection code from display
    $content = preg_replace('/<\?php.*?\?>/s', '', $content);
    echo htmlspecialchars($content);
} else {
    echo "No submissions yet.";
}
?>