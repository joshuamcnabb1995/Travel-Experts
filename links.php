<?php
    echo '<table>';

    for($i = 1; $i <= 6; $i++) {
        echo '<tr><td>' . $i . ' - </td>
              <td><a href="pages/page' . $i . '.php">Page ' . $i . '</a></td><tr>';
    }

    echo '</table>';
?>
