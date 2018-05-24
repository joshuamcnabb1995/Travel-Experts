<?php
    include('functions/functions.php');

    // Run the query to get the data of the agents
    $result = getTableData('agents', 'AgentId,AgtFirstName,AgtLastName', 'AgentId = 1', 'AgentId', FALSE);

    while($row = $result->fetch_assoc()) {
        echo $row['AgentId'] . ' - ' . $row['AgtFirstName'] . ' ' . $row['AgtLastName'];
    }

    $agentDetails = array('AgtFirstName' => 'Joshua',
                          'AgtMiddleInitial' => 'A',
                          'AgtLastName' => 'McNabb',
                          'AgtBusPhone' => 12345678901,
                          'AgtEmail' => 'joshua.mcnabb@edu.sait.ca',
                          'AgtPosition' => 'Student',
                          'AgencyId' => 1);

    // Test the insert agent function
    addNewAgent($agentDetails);
