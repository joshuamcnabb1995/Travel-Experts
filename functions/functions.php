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
            $values .= "'" . $row . "',";
        }

        // Remove the last comma from the columns and values
        $columns = rtrim($columns, ',');
        $values = rtrim($values, ',');

        $database->query("INSERT INTO $table($columns)
                                      VALUES($values)");

        if($database->error)
            return FALSE;
        else
            return TRUE;
    }
