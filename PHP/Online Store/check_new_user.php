<?php

/////////   Kollar om alla värde är satta, om så så körs diverse funktioner från funktioner.php för att kontrollera input, annars skickas användaren tillbaka med felmeddelande 

if (isset($_POST['fname']) && isset($_POST['ename']) && isset($_POST['email']) && isset($_POST['adress']) && isset($_POST['postnr']) && isset($_POST['stad']) &&
    isset($_POST['password']) && isset($_POST['roll']) ) {



        $fnamn = $_POST['fname'];
        $enamn = $_POST['ename'];
        $email = $_POST['email'];
        $adress = $_POST['adress'];
        $postnr = $_POST['postnr'];
        $stad = $_POST['stad'];
        $pwd = $_POST['password'];
        $roll = $_POST['roll'];

        require_once 'dbconnect.php';
        require_once 'funktioner.php';

        //// Kollar så alla fält är ifyllda
        if (is_empty($fnamn, $enamn, $adress, $postnr, $stad, $email, $pwd) !== false) {
            header("Location: nyMedlem.php?error1=Alla fält måste fyllas i");
            exit();
        }
        /// Kollar så det är en giltig email
        if (valid_email($email) !== false) {
            header("Location: nyMedlem.php?error3=Email fel format");
            exit();
        }
        /// Kollar så användaren inte redan finns i databasen
        if (user_exists($db, $email) !== false) {
            header("Location: nyMedlem.php?error1=Användaren finns redan");
            exit();
        }

    /////   Om input tar sig igenom alla tester körs funktionen som lägger till användaren i databasen    /////

        add_user($db, $fnamn, $enamn, $adress, $postnr, $stad, $email, $pwd, $roll);
    }

    else {
        header("Location: nyMedlem.php?error1=Något gick fel");
        exit();
    }