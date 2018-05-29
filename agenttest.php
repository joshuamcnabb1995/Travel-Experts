<?php
    include('inc/classes/agents.php');

    $agentData = array('AgtFirstName' => 'Joshua',
                        'AgtMiddleInitial' => 'A',
                        'AgtLastName' => 'McNabb',
                        'AgtBusPhone' => 12345678901,
                        'AgtEmail' => 'joshua.mcnabb@edu.sait.ca',
                        'AgtPosition' => 'President',
                        'AgencyId' => 1);

    $Agents = new Agents($agentData);

    echo $Agents->AgtMiddleInitial;
