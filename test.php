<?php
    session_start(); // Script won't work without this

    include('functions/functions.php');

    // Whatever data you want to insert into the table
    /*$insertData = array('AgtFirstName' => 'Joshua',
                        'AgtMiddleInitial' => 'A',
                        'AgtLastName' => 'McNabb',
                        'AgtBusPhone' => 12345678901,
                        'AgtEmail' => 'joshua.mcnabb@edu.sait.ca',
                        'AgtPosition' => 'President',
                        'AgencyId' => 1);*/

    $insertData = $_POST;

    // Store the message as a session so it can be retrieved on the agent input page
    if(addNewTableResult('agents', $insertData))
        $_SESSION['insertMessage'] = 'A new result was successfully inserted into the agents table.';
    else
        $_SESSION['insertMessage'] = 'The result wasn\'t inserted into the agents table.';

    // Redirect back to the agent entry page
    header('Location: addAgent.php');
