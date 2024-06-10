<?php

if (isset($_POST['id']) && isset($_POST['item_namn']) && isset($_POST['item_pris']) && isset($_POST['beskriv'])) {
  $id = $_POST['id'];
  $item_namn = $_POST['item_namn'];
  $item_pris = $_POST['item_pris'];
  $beskrivning = $_POST['beskriv'];
  $item_lager = $_POST['item_lager'];

  include 'dbconnect.php';
  require_once 'funktioner.php';

  add_item($db, $item_namn, $item_pris, $beskrivning, $item_lager);

}

?>
