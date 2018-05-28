<?php
    $users = file('users.txt');
    $accounts = array();

    foreach($users as $user) {
        array_push($accounts, $user);
    }

    print_r($accounts);
