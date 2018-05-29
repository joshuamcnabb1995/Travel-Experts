<?php
    session_start();

    include('../inc/database.php');

    $formUsername = strip_tags($_POST['username']);
    $formPassword = strip_tags(md5($_POST['password'])); // Hash the password
    $getUsernameCount = $database->query("SELECT username FROM agents WHERE username = '$formUsername' ORDER BY AgentId DESC LIMIT 1");
    $getPasswordCount = $database->query("SELECT password FROM agents WHERE password = '$formPassword' ORDER BY AgentId DESC LIMIT 1");
    $usernameCount = $getUsernameCount->num_rows;
    $passwordCount = $getPasswordCount->num_rows;

    // Login validation
    if(empty($formUsername)) {
        $_SESSION['error_message'] = 'No username entered!';
        header('Location: index.php');
    }

    else if($usernameCount == 0) {
        $_SESSION['error_message'] = 'User doesn\'t exist.';
        header('Location: index.php');
    }

    else if(empty($formPassword)) {
        $_SESSION['error_message'] = 'No password entered!';
        header('Location: index.php');
    }

    else if($usernameCount == 1 && $passwordCount == 0) {
        $_SESSION['error_message'] = 'Password is incorrect!';
        header('Location: index.php');
    }

    else {
        $_SESSION['logged_in'] = 1;
        header('Location: ../addAgent.php');
    }
