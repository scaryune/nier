<?php

// kollar så alla värde finns med
if (isset($_POST['item_id']) && isset($_POST['item_namn']) && isset($_POST['item_pris']) && isset($_POST['item_beskrivning']) && isset($_POST['item_lager'])) {

          $item_id = $_POST['item_id'];
          $item_namn = $_POST['item_namn'];
          $item_pris = $_POST['item_pris'];
          $beskrivning = $_POST['item_beskrivning'];
          $item_lager = $_POST['item_lager'];


        require_once 'dbconnect.php';
        require_once 'funktioner.php';
      // skickar med dom ifyllda värdena till uppdatera funktionen som finns i funktioner.php
        update_item($db, $item_namn, $item_pris, $beskrivning, $item_lager, $item_id);

}
else {
  header("Location: update.php?error1=Något gick fel");
  exit();
}
?>