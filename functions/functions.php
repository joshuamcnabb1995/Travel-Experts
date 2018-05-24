<?php
    include('inc/database.php'); // Database object

    // Generic function for the extra challenge
    function getTableData($tablename = NULL, $fields = NULL, $queryStatements = NULL, $orderBy = NULL, $orderAsc = TRUE)
    {
         // Declare database object as global so it can be accessed inside the function
        global $database

        /* Start basic validation */
        if($tablename === NULL)
            return 'You must enter a table name';

        if($fields === NULL)
            return 'You must return a field';

        if($queryStatements === NULL)
            return 'You must enter some query statements.';

        if($orderBy === NULL)
            return 'You must order your table.';
        /* End basic validation */

        if($orderAsc === TRUE)
            $orderAsc = 'ASC';

        else
            $orderAsc = 'DESC';

        return $database->query("SELECT $fields
                                       FROM $tablename
                                       WHERE $queryStatements
                                       ORDER BY $orderBy
                                       $orderAsc");
    }

    function addNewAgent($agentDetails)
    {
        global $database;

        // Separate each key by commas and add single quotes to them for the sql statement
        $values = "'" . implode("','", $agentDetails) . "'";
        $database->query("INSERT INTO agents(AgtFirstName, AgtMiddleInitial, AgtLastName, AgtBusPhone, AgtEmail, AgtPosition, AgencyId)
                                      VALUES($values)") or die('<br />' . $database->error);

        if($database->error)
            echo '<br />The agent wasn\'t inserted into the database.';

        else
            echo '<br />The agent was successfully inserted into the database.';
    }
