<?php Session_start(); 
    include "header.html";
?>


<h1 class="mx-auto">Ändra produkt</h1>
<?php

// kollar om POST andvändts och sätter om så variablerna till det värdet
if (isset($_POST['item_id']) && isset($_POST['item_namn']) && isset($_POST['item_pris']) && isset($_POST['item_beskrivning']) && isset($_POST['item_lager'])) {

    $item_id = $_POST['item_id'];
    $item_namn = $_POST['item_namn'];
    $item_pris = $_POST['item_pris'];
    $beskrivning = $_POST['item_beskrivning'];
    $item_lager = $_POST['item_lager'];
}
else {  // annars är variablerna lika med det som skickades med från admin sidan
    $item_id = $_GET['ID'];
    $item_namn = $_GET['Produktnamn'];
    $item_pris = $_GET['Pris'];
    $beskrivning = $_GET['Beskrivning'];
    $item_lager = $_GET['Lagersaldo'];    


echo "<div id='update_container' class='w-50 mt-5 mx-auto'>
<form action='doUpdate.php' method='post'>
        <h3>Produktnamn</h3>
       <div class='form-group'>
            <input type='hidden' class='form-control form-control-lg' name='item_id' value='" . $item_id . "'>  <!-- Gömmer id:et för användaren-->
            <input type='text' class='form-control form-control-lg' name='item_namn' value='" . $item_namn . "'>
        </div>
        <h3>Pris</h3>
       <div class='form-group'>
           <input type='text' class='form-control form-control-lg' name='item_pris' value='" . $item_pris . "'>
       </div>
       <h3>Beskrivning</h3>
       <div class='form-group'>
           <textarea class='form-control' rows='5' name='item_beskrivning'>" . $beskrivning . "</textarea>
       </div>
       <h3>Lagersaldo</h3>
       <div class='form-group'>
           <input type='text' class='form-control col-2' name='item_lager' value='" . $item_lager . "'>
       </div>";

       if (isset($_GET['error3'])) { // hämtar felmeddelandena från checkUser
        $error = $_GET['error3'];
     echo "<div class='alert alert-danger alert-dismissible fade show'>
          <button type='button' class='close' data-dismiss='alert'>&times;</button>" . $error . "</div>"; } 

       echo "<div class='form-group'>
            <input type='submit' name='update' class='btn btn-success btn-lg shadow' value='Spara'>
            <a href='admin.php' class='btn btn-info btn-lg shadow' role='button'>Tillbaka</a>
       </div>
</form> 
   
</div>";
}

?>
<?php include "footer.html" ?>