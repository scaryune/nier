<?php
        session_start();
        // tar bort sessionen skickar tillbaka till förstasidan
        session_destroy();
        header("Location: start.php");
?>