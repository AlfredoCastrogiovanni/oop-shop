<?php

function login($email, $password, $connection) {
    if (session_status() === PHP_SESSION_NONE){
        session_start();
    }

    $parametricQuery = $connection->prepare("SELECT * FROM `users` WHERE `email` = ?");
    $parametricQuery->bind_param('s', $email);
    $parametricQuery->execute();
    $results = $parametricQuery->get_result();

    if ($results->num_rows > 0) {
        $row = $results->fetch_assoc();

        if(password_verify($password, $row['password'])) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            header("Location: ../index.php");
        }
    }

    echo "Wrong credentials";
}

function register($name, $surname, $email, $password, $connection) {
    if (session_status() === PHP_SESSION_NONE){
        session_start();
    }

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $parametricQuery = $connection->prepare("INSERT INTO users (name, surname, email, password) VALUES (?, ?, ?, ?)");
    $parametricQuery->bind_param('ssss', $name, $surname, $email, $hash);

    if(!$parametricQuery->execute()) {
        echo 'error';
    }

    header("Location: ./login.php");
}