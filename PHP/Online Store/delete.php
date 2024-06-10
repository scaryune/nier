
<?php

// Hämtar rätt aktivitets id med POST och raderar det, skickar sedan tillbaka till admin
    include "dbconnect.php";
    if(isset($_POST['deletedata'])) {
      $id = $_POST['radera'];

      $query = "DELETE FROM Produkter WHERE ID='$id'";
  
      if ($db->query($query) === TRUE) {
          header("Location: admin.php");
        } else {
          echo "Error deleting record: " . $db->error;
        } 
    }
