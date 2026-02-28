<?php $file = 'submissions-data.php'; ?>
<?php
$password = 'password';
// TODO: make this not just "password"
if (!isset($_POST['password']) || $_POST['password'] !== $password) { ?>
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
    <?php exit();}
?>

<!-- Show submissions -->
<!DOCTYPE html>
<html>
<head>
    <title>View Submissions</title>
    <link rel="stylesheet" href="static/style/main.css">
</head>
<body>
    <div class="container tiertiary" style="padding-left 5rem;">
        <h1>Form Submissions</h1>
        <a href="view-submissions.php">Logout</a>
    </div>
    <hr>
    <div class="flex-column centered-content">
    <?php
    $content = file_get_contents($file);
    $content = preg_replace('/<\?php.*?\?>/s', '', $content);
    $content = trim($content); // Split into individual submissions by blank line
    $submissions = explode("\n\n", $content);
    foreach ($submissions as $sub):

        $submission = trim($sub);
        if (empty($sub)) {
            continue;
        }
        ?>
    <div class="submission-card flex-column">
        <?php
        $lines = explode("\n", $sub);
        foreach ($lines as $line):

            $line = trim($line);
            if (empty($line)) {
                continue;
            }
            // Split into label and value
            [$label, $value] = explode(': ', $line, 2);
            ?>
            <p><strong><?php echo htmlspecialchars($label); ?>:</strong> <?php echo htmlspecialchars($value); ?></p>
        <?php
        endforeach;
        ?>
    </div>
    <?php
    endforeach;
    ?>
</div>
</body>
</html>