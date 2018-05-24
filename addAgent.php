<?php
    include('functions/functions.php');

    $agentDetails = array('AgtFirstName' => 'Joshua',
                          'AgtMiddleInitial' => 'A',
                          'AgtLastName' => 'McNabb',
                          'AgtBusPhone' => 12345678901,
                          'AgtEmail' => 'joshua.mcnabb@edu.sait.ca',
                          'AgtPosition' => 'Student',
                          'AgencyId' => 1);

    // Run the query to get the data of the agents
    getTableData('agents', $agentDetails, 'AgentId = 1', 'AgentId', FALSE);

    // Test the insert agent function
    addNewAgent($agentDetails);
