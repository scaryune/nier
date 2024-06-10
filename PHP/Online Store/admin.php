<!-- Denna sidan hade jag blockerat med en .htaccess fil för att man inte ska kunna komma in på den genom att skriva in admin.php i URL:en och ändå komma in på sidan utan att logga in-->
<?php
       session_start();
?>

<?php include "header.html"; ?>

    <ul class="nav flex-column float-right justify-content-end">
      <li class="nav-item mt-3">
      <a href='logout.php' class='btn btn-dark btn-lg float-right shadow border' role='button'>Logga ut</a> <!-- Loggar ut användaren med logout.php filen-->
      </li>
      <li class="nav-item mt-3">
      <a href='ny.php' class='btn btn-info btn-lg shadow border' role='button'>Lägg till ny produkt</a>
      </li>
    </ul>

<h1> Admin sida </h1>

<div class="table mb-5">

<?php

include 'dbconnect.php';
include 'funktioner.php';

 $result = get_item($db);

    echo "<table><tr><th>ID</th><th>Produktnamn</th><th>Pris</th><th>Beskrivning</th><th>Lagersaldo</th><th></th><th></th></tr>";
  
    while($row = $result->fetch_assoc()) {  // loopar igenom produkterna och skriver ut dom i en html table där man även kan radera och ändra
      $item_id = $row['ID'];
      $item_namn = $row['Produktnamn'];
      $item_pris = $row['Pris'];
      $beskrivning = $row['Beskrivning'];
      $item_lager = $row['Lagersaldo'];
 
        echo "<tr><td>" . $item_id . "</td>" . "<td>" . $item_namn . "</td>" . "<td>" . "$item_pris" . "</td>" . "<td>" . substr($beskrivning, 0, 30) . "...." . "</td>" . "<td>" . "$item_lager" . "</td>" . "<td>" . "<button type='button' class='btn btn-danger deletebtn'>Radera</button>" . "</td>" . "<td>" . "<a href='update.php?ID=$item_id&Produktnamn=$item_namn&Pris=$item_pris&Beskrivning=$beskrivning&Lagersaldo=$item_lager' class='btn btn-success' role='button'>Ändra</a>" . "</td></tr>";

  }
  echo "</table>";

?>
</div>


<!-- Bootsrap modal som öppnar en ruta när man klickar på radera för att göra en bekräftelse så användaren inte raderar av misstag-->
<!---------------------knappen submit är kopplad till delete.php där rätt id hämtas och raderas ------------------------>
<div class="modal fade" id="deleteModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      <form action="delete.php" method="POST">

      <div class="modal-body">
        <input type="hidden" name="radera" id="radera">
      <h4 class="modal-title">Är du säker på att du vill radera produkten ?</h4>
      </div>

        <div class="modal-footer">
          <button type="submit" name="deletedata" class="btn btn-primary">Radera</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Avbryt</button>
        </div>        
      </div>
    </div>
  </div>


  <?php if (isset($_GET['success'])) { 
                $success = $_GET['success'];
             echo '<script>alert("Ny produkt skapad!")</script>'; } ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script>
  //// funktionen lyssnar på ett klick anrop från knapparna radera i tabellen och öppnar då rutan  //////
  $(document).ready(function() {
    $('.deletebtn').on('click', function() { 
      $('#deleteModal').modal('show'); 

      $tr = $(this).closest('tr'); // funktion som hämtar det närmsta tr elementet till "this", this kopplas till rätt element med .deletebtn

      var data = $tr.children("td").map(function() { // hämtar all data som ligger under tr elementet
          return $(this).text();
        }).get();
        console.log(data);
        $('#radera').val(data[0]);
    });
  });
  </script>
</body>
<?php include "footer.html" ?>