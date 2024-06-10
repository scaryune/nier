<?php
// skapar en kontakt till databasen
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "dbname";


$db = new mysqli($servername, $username, $password, $dbname);
// kontrollerar kontakt
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
?>