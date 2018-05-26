<?php
    include('functions/functions.php');

    // Whatever data you want to insert into the table
    $insertData = array('AgtFirstName' => 'Joshua',
                        'AgtMiddleInitial' => 'A',
                        'AgtLastName' => 'McNabb',
                        'AgtBusPhone' => 12345678901,
                        'AgtEmail' => 'joshua.mcnabb@edu.sait.ca',
                        'AgtPosition' => 'President',
                        'AgencyId' => 1);

    if(addNewTableResult('agents', $insertData))
        echo 'A new result was successfully inserted into the agents table.';
    else
        echo 'The result wasn\'t inserted into the agents table.';
