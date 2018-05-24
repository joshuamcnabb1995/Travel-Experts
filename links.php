<?php $page = 7; ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include('inc/meta.php'); ?>

        <title>Travel Experts - Links</title>

        <?php include('inc/css.php'); ?>
    </head>

    <body>
        <?php
            include('inc/nav.php');
            include('inc/header.php');
            include('inc/linkvariables.php');

            echo '<table>';

            foreach($travelWebsites as $url => $name) {
                echo '<tr><td><a href="' . $url . '" target="_blank">' . $name . '</a></tr></td>';
            }

            echo '</table>';

            include('inc/footer.php');
        ?>
    </body>
</html>
