<?php
    include('functions/getdate.php');

    $page = 0;
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include('inc/meta.php'); ?>

        <?php echo changeStyle(); ?>

        <title>Travel Experts - The Best Travel Site on the Web!</title>
        <?php include('inc/css.php'); ?>
        <script src="js/navigation.js" type="text/javascript"></script>
        <!-- Load jQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>

    <body>
        <?php include('inc/nav.php'); ?>

        <article>
            <?php include('inc/header.php'); ?>

            <section>
                <h1 style="text-align:center;font-size:80px;"><?php echo displayWelcomeMessage(); ?></h1>
            </section>
        </article>

        <?php include('inc/footer.php'); ?>
    </body>
</html>
