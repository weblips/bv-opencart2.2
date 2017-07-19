<!doctype html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>title</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
        <link rel="shortcut icon" href="/favicon.ico">

        <?php //include('partials/styles.php'); ?>

        <link rel="shortcut icon" href="/favicon.ico">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="styles/vendor.css">
        <link rel="stylesheet" href="styles/main.css">

    </head>
    <body><?php include('menu.php');?>
    <!--[if lt IE 9]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <?php include('modules/mainmenu-alt.php'); ?>

    <?php include('pages/registrazione.php'); ?>

    <div class="container">
        <?php /*
        <div class="footer">
            <?php include('partials/footer.php'); ?>
        </div>
        */ ?>
        <?php include('partials/subfooter.php'); ?>
    </div>

    <?php include('partials/cookies.php'); ?>

    <?php //include('partials/scripts.php'); ?>

    <script src="scripts/vendor.js"></script>

    <script src="scripts/main.js"></script>

    </body>
</html>
