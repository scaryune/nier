<?php


if (isset($_POST['email']) && isset($_POST['password'])){

    $email = $_POST['email'];
    $pwd = $_POST['password'];

    require_once 'dbconnect.php';
    require_once 'funktioner.php';
    // Kollar så fälten är ifyllda
    if (empty_login($email, $pwd) !== false) {
        header("Location: login.php?error1=Alla fält måste fyllas i");
        exit();
    }
    /// är fälten ifyllda körs funktionen login_user som kollar så användaren och lösenordet stämmer
    login_user($db, $email, $pwd);
}
else {
    header("Location: login.php?error1=Fel uppgifter");
    exit();
}
