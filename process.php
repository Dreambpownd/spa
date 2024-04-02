<?php

require_once 'users.php';
$username = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;


if (null !== $username || null !== $password) {

    if (checkPassword($username, $password)) {
        session_start(); 
        
        $_SESSION['auth'] = true; 
        $_SESSION['id'] = getUsersList(); 
        $_SESSION['login'] = $username; 

    }
}
session_start();

$auth = $_SESSION['auth'] ?? null;

if ($auth) {
    header("Location: offer.php");
    $_SESSION['date'] = date("d-m-Y H:i:s");
}else{
    header("Location: login.php");

}
