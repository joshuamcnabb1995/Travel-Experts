<?php
    include('inc/database.php'); // Database object; may need to change the settings for it to work on your machine

    function addNewTableResult($table, $insertData)
    {
        global $database;
        $columns = '';
        $values = '';

        // How I would've done the assignment
        //$columns = implode(',', array_keys($insertData));
        //$values = "'" . implode("','", $insertData) . "'";

        foreach($insertData as $column => $row) {
            $columns .= $column . ',';

            if($column == 'password')
                $values .= "'" . md5($row) . "',"; // Hash the password

            else
                $values .= "'" . $row . "',";
        }

        // Remove the last comma from the columns and values
        $columns = rtrim($columns, ',');
        $values = rtrim($values, ',');

        $database->query("INSERT INTO $table($columns)
                                      VALUES($values)");

        $date = date('l, d F, Y \a\t g:ia');

        if($database->error) {
            $logMessage = $date . ' - A new result was successfully inserted into the agents table' . "\r\n";
            return FALSE;
        } else {
            $logMessage = $date . '- The result wasn\'t inserted into the agents table' . "\r\n";
            return TRUE;
        }

        // Log messages - not working
        file_put_contents('logs.txt', $logMessage, FILE_APPEND) or die('File write error');
    }
