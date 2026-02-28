<!doctype html>
<html lang="eng">
    <head>
        <!-- prettier-ignore-start -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>International Experiences</title>
        <link rel="stylesheet" href="static/style/main.css" />
        <link rel="stylesheet" href="static/style/markdown.css" />
        <link rel="icon" type="image/svg+xml" href="static/resources/hotlsite_icon.svg" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet" />
        <!-- prettier-ignore-end -->
    </head>
    <body>
        <?php include 'header-bar.php'; ?>
        <!-- post to the submit-form.php address for the form handler-->
        <div class="background container flex-column centered-content">
            <div>
                <h1>Reach out to FUNDECOR</h1>
                <form class="flex-column" action="submit-form.php" method="POST">
                    <label>Name:</label>
                    <input type="text" name="name" required />
                    <label>Email:</label>
                    <input type="email" name="email" required />
                    <label>Message:</label>
                    <textarea name="message" required></textarea>
                    <div class="flex-row" style="justify-content: space-between">
                        <button type="button" onclick="window.location.href = 'index.php'">Back</button>
                        <button type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="background container flex-row" style="justify-content: right">
            <a href="view-applications.php" style="color: var(--fundecor-navy)">Admin Portal</a>
        </div>

        <?php include 'footer-bar.php'; ?>
    </body>
</html>
