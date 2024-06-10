<?php Session_start(); 
    include "header.html";
?>
<h1 class="mx-auto">Lägg till ny produkt</h1>

<div id='ny_produkt_container' class='w-50 mt-5 mx-auto mb-5'>
<!-----------      Formulär för att lägga till nya produkter    --------------->
<form action='addnew.php' method='post'>
        <h4>Produktnamn</h4>
       <div class='form-group'>
            <input type='hidden' class='form-control form-control-lg' name='id' value=''>
            <input type='text' class='form-control form-control-lg' name='item_namn' value=''>
        </div>
        <h4>Pris</h4>
       <div class='form-group'>
           <input type='text' class='form-control form-control-lg' name='item_pris' value=''>
       </div>
       <h4>Beskrivning</h4>
       <div class='form-group'>
           <textarea class="form-control" rows="5" name='beskriv'></textarea>
       </div>
       <h4>Lagersaldo</h4>
       <div class='form-group'>
           <input type='text' class='form-control col-2' name='item_lager' value=''>
       </div>
       <div class='form-group'>
            <input type='submit' class='btn btn-success btn-lg shadow border' value='Spara'>
            <a href='admin.php' class='btn btn-info btn-lg shadow border' role='button'>Tillbaka</a>
       </div>

<!-----------      Kollar om det finns ett felmeddelande, finns det visas en röd alert upp med felmeddelande man skickade med i headern--------------->
       <?php if (isset($_GET['error'])) { 
                $error = $_GET['error'];
             echo "<div class='alert alert-danger alert-dismissible fade show'>
                  <button type='button' class='close' data-dismiss='alert'>&times;</button>" . "$error" . "</div>"; } ?>
</form>
</div>
</body>
<?php include "footer.html" ?>
