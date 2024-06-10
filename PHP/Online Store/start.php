
<?php include "header.html"; ?>

<body>
<a href="login.php" class="btn btn-dark mt-2 btn-lg shadow border" id="loginbutton" role="button">Logga in</a>

<h1> Produkter </h1>
<div class="d-flex flex-row flex-wrap p-3 mb-5 bg-transparent justify-content-around">
<?php

 // Hämtar alla produkter med funktionen get_item som hämtas från funktioner.php, $db skickas med från dbconnect där uppkopplingen tiill databasen finns
 require_once 'dbconnect.php';
 require_once 'funktioner.php';
 
  $result = get_item($db);
 
  /////  Loopar igenom resultatet från funktionen 
 
  while($row = $result->fetch_assoc()) {  
     $item_id = $row['ID'];
     $item_namn = $row['Produktnamn'];
     $item_pris = $row['Pris'];
     $beskrivning = $row['Beskrivning'];
     $item_lager = $row['Lagersaldo'];

    echo "<div class='startcontainer'>" . "<h2>" . "$item_namn" . "</h2>" . "</br>" . 
    "<h3>" . "Pris" . " " . "$item_pris" . "kr" . "</h3>" . "</br>" . "<p>" . substr($beskrivning, 0, 90) . "...." . "</p>" . 
    "<br/>" . "<form class='form-inline justify-content-center'> 
    <input type='text' class='form-control' placeholder='Mängd' name='antal_produkt'>
    <a href='login.php?error=Du måste vara inloggad för att kunna handla' class='btn btn-primary' role='button'>Lägg till</a></form>" . "</div>";
  }
?>
</div>
</body>
<?php include "footer.html" ?>