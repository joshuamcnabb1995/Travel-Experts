<?php
    include('inc/database.php'); // Database object

    // Generic function for the extra challenge
    function getTableData($tablename = NULL, $fields = NULL, $queryStatements = NULL, $orderBy = NULL, $orderAsc = TRUE)
    {
         // Declare database object as global so it can be accessed inside the function
        global $database;

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

        // Separate each key by commas for the sql statement
        $fields = implode(',', array_keys($fields));

        $result = $database->query("SELECT $fields
                                    FROM $tablename
                                    WHERE $queryStatements
                                    ORDER BY $orderBy
                                    $orderAsc");

        // Loop through the agents table to show all the agents
        while($row = $result->fetch_assoc()) {
            echo 'First Name: <b>' . $row['AgtFirstName'] . '</b><br />
                 Middle Initial: <b>' . $row['AgtMiddleInitial'] . '</b><br />
                 Last Name: <b>' . $row['AgtLastName'] . '</b><br />
                 Business Phone: <b>' . $row['AgtBusPhone'] . '</b><br />
                 Email Address: <b>' . $row['AgtEmail'] . '</b><br />
                 Position: <b>' . $row['AgtPosition'] . '</b><br />
                 Agency ID: <b>' . $row['AgencyId'] . '</b><br />';
        }
    }

    function addNewAgent($agentDetails)
    {
        global $database;

        // Separate each value by commas and surround them in single quotes for the sql statement
        $values = "'" . implode("','", $agentDetails) . "'";

        $database->query("INSERT INTO agents(AgtFirstName, AgtMiddleInitial, AgtLastName, AgtBusPhone, AgtEmail, AgtPosition, AgencyId)
                                      VALUES($values)");

        if($database->error)
            echo '<br />No agent was inserted into the database.';

        else
            echo '<br />A new agent was successfully inserted into the database.';
    }
