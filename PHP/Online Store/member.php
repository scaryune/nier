<?php
       session_start();
?>

<?php include "member_header.php"; ?>

      <ul class="nav flex-column float-right">
      <li class="nav-item">
      <a href='logout.php' class='btn btn-dark btn-lg mt-2 border border-right-0 float-right shadow' role='button'>Logga ut</a>
      </li>
    </ul>

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
    ?>


<!--------    Ett div element omsluter var produkt      ----------------->
    <div class='startcontainer'>
        <h2><?php echo $item_namn; ?></h2></br>
        <h3>Pris<?php echo " " . $item_pris; ?></h3></br>
        <span class='text-danger'>
        <?php if ($item_lager < 4) { echo "<h3>" . "Endast" . " " . $item_lager, " " . "kvar i lager" . "</h3>"; } ?></br>
        </span>
        <p><?php echo substr($beskrivning, 0, 90) . "...."; ?></p></br>

        <form action='member.php?ID=<?php echo $item_id;?>' method='post'>
        <div class='form-group form-inline justify-content-center'>
        <input type='text' class='form-control' placeholder='Mängd' name='antal'>
        <input type='hidden' name='hidden_namn' value='<?php echo $item_namn; ?>'>
        <input type='hidden' name='hidden_pris' value='<?php echo $item_pris; ?>'>
        <input type='hidden' name='hidden_lager' value='<?php echo $item_lager; ?>'>
        <button type='submit' name='add_to_cart' class='btn btn-primary'>Lägg till</button>
        </form>
        </div>
      </div>
      <?php
 }

 ////    kollar om det finns en varukorg, finns varukorgen skapas en array av arrayer   //////
   if (isset($_POST['add_to_cart'])) {
     // kollar så att antalet produkter användaren försöker lägga till i korgen inte överstiger antalet som finns i databasen, om så kommer det upp
     // en alert med hur många som finns kvar i lager
    if ($_POST['antal'] > $_POST['hidden_lager']) {
      echo '<script>alert("Endast '.$item_lager.' kvar i lager")</script>';
      echo '<script>window.location="member.php"</script>';
     }
     // finns det tillräckligt så läggs produkten till i varukorgen
      else if (isset($_SESSION['cart'])) {
          $item_array_id = array_column($_SESSION['cart'], 'ID');

            if (!in_array($_GET['ID'], $item_array_id)){

              $count = count($_SESSION['cart']);
              $item_array = array (
                'ID' => $_GET['ID'],
                'Produktnamn' => $_POST['hidden_namn'],
                'Pris' => $_POST['hidden_pris'],
                'antal' => $_POST['antal']
                );

                $_SESSION['cart'][$count] = $item_array;
                print_r($_SESSION['cart']);
            }
            else {
              echo '<script>alert("Varan finns redan i korgen")</script>';
              echo '<script>window.location="member.php"</script>';
            }

      }
/////////////////    Finns det ingen varukorg så skapas en här när man lägger till en vara   ////////////
////   i sessionen cart hålls egenskaperna på produkten, session cart hamnar sedan i en egen array (ovan) för att kunna hålla multipla produkter   //
      else {
        $item_array = array (
          'ID' => $_GET['ID'],
          'Produktnamn' => $_POST['hidden_namn'],
          'Pris' => $_POST['hidden_pris'],
          'antal' => $_POST['antal']
            );
            $_SESSION['cart'][0] = $item_array; 
      }
  } 
 
 ?>
</div>
</body>
<?php include "footer.html" ?>
