<?php
    // funktion som kollar så fälten är ifyllda på sidan där man loggar in
    function empty_login($email, $pwd) {
        $result;
        if (empty($email) || empty($pwd)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    // funktion som loggar in användaren
    function login_user($db, $email, $pwd) {

        $userExists = user_exists($db, $email);  // kollar först med funktionen user_exists om användaren finns

            if ($userExists === false) {
                header("Location: login.php?error1=Användarnamnet finns inte");
                exit();
            }

            $hashedPWD = $userExists['Lösenord'];  // krypterar lösenord och kollar så det stämmer överens med användarens
            $checkPWD = password_verify($pwd, $hashedPWD);

            if ($checkPWD === false) {
                header("Location: login.php?error1=Lösenord är fel");
                exit();
            }
            // kontrollerar allt ovanstående och om användaren har behörighet admin skickas hen till adminsidan och en session startas
            else if ($checkPWD === true && $userExists['Behörighet'] === "Admin") {  

                session_start();
                $_SESSION['Email'] = $user_exists['email'];
                header("Location: admin.php");
                exit();
            }
            // kontrollerar allt ovanstående och om användaren har behörighet medlem skickas hen till medlemssidan och en session startas
            else if ($checkPWD === true && $userExists['Behörighet'] === "Medlem") {
                session_start();
                $_SESSION['Email'] = $email;
                header("Location: member.php");
                exit();
            }
    }

    // funktion som kollar om alla fält är ifyllda i formuläret på sidan där man blir medlem
    function is_empty($fnamn, $enamn, $adress, $postnr, $stad, $email, $pwd) {
        $result;
        if (empty($fnamn) || empty($enamn) || empty($email) || empty($adress) || empty($postnr) || empty($stad) || empty($pwd)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    // funktion som kollar så email är ifyllt korrekt
    function valid_email($email) {
        $result;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }


    // funktion som kollar om användaren redan finns i databasen
    function user_exists($db, $email) {

        $query = "SELECT * FROM Users WHERE Email=?;";
        $stmt = mysqli_stmt_init($db);

        if (!mysqli_stmt_prepare($stmt, $query)) {
            header("Location: nyMedlem.php?error1=Kolla om användare finns misslyckades");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            return $row;
        }
        else {
            $result = false;
            return $result;
        }
        mysqli_stmt_close($stmt);
    }

    function add_user($db, $fnamn, $enamn, $adress, $postnr, $stad, $email, $pwd, $roll) {

        $stmt = $db->prepare("INSERT INTO Users (Förnamn, Efternamn, Adress, Postnr, Stad, Email, Lösenord, Behörighet) VALUES (?, ?, ?, ?, ?, ?, ?, ?);");
        $stmt->bind_param("sssissss", $fnamn, $enamn, $adress, $postnr, $stad, $email, $hashedPWD, $roll);

        $hashedPWD = password_hash($pwd, PASSWORD_DEFAULT);
        $stmt->execute();
        header("Location: login.php?success=Välkommen som medlem! Du kan nu logga in.");
        exit();
    }


    // funktion som hämtar och returnerar alla produkter och deras information
    function get_item($db) {

        $query = "SELECT * FROM Produkter";

        $result = mysqli_query($db, $query);

        if ($result->num_rows > 0) {

            return $result;
            }
        }

        function update_item($db, $item_namn, $item_pris, $beskrivning, $item_lager, $item_id) {
            $stmt = $db->prepare("UPDATE Produkter SET Produktnamn=?, Pris=?, Beskrivning=?, Lagersaldo=? WHERE ID=?;");
            $stmt->bind_param("sisii", $item_namn, $item_pris, $beskrivning, $item_lager, $item_id);
            
            $stmt->execute();
            header("Location: admin.php?error1=Lyckades");
            exit();
        }

    // funktion som lägger till nya produkter

    function add_item($db, $item_namn, $item_pris, $beskrivning, $item_lager) {

        $stmt = $db->prepare("INSERT INTO Produkter (Produktnamn, Pris, Beskrivning, Lagersaldo) VALUES (?, ?, ?, ?);");
        $stmt->bind_param("sisi", $item_namn, $item_pris, $beskrivning, $item_lager);
        $stmt->execute();
        header("Location: admin.php?success");
        exit();
    }

