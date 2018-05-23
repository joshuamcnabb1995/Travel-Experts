<?php
    include('inc/linkvariables.php');

    echo '<table>';

    foreach ($travelWebsites as $url => $name) {
        echo '<tr><td><a href="' . $url . '" target="_blank">' . $name . '</a></tr></td>';
    }

    echo '</table>';
