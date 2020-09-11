<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex">
        <title>João Mira | Portfólio</title>
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
        <link rel="stylesheet" href="/resources/css/styles.css">
        <script src="/resources/js/app.js" defer></script>
    </head>
    <body class="position-relative">
        <?php require("layouts/header.php")?>

        <main>
            <?php require("layouts/intro-banner.php")?>

            <?php require("layouts/about.php")?>

            <?php require("layouts/projects.php")?>

            <?php require("layouts/contact.php")?>
        </main>

        <div class="to-top-btn cursor-pointer">
            <a href="#">
                <i class="fas fa-arrow-up"></i>
            </a>
        </div>

        <footer class="dark-bg">
            <div class="footer-content p-5 text-center">
                <p class="m-0 color-text">Developed by &copy; João Mira, 2020</p>
            </div>
        </footer>
    </body>
</html>