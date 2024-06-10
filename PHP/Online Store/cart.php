<?php
       session_start();
?>
<?php include "member_header.php"; ?>

<?php 
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'delete') {
            foreach($_SESSION['cart'] as $keys => $values) {
                if ($values["ID"] == $_GET['ID']) {
                    unset($_SESSION["cart"][$keys]);
                    header("Location: cart.php");
                    } 
                    else {
                  echo "Error deleting product";
                } 
                }
            }
        }
?>

    <ul class="nav flex-column float-right justify-content-end mt-4">
      <li class="nav-item mt-2">
      <a href='logout.php' class='btn btn-dark btn-lg border border-right-0 float-right shadow' role='button'>Logga ut</a> <!-- Loggar ut användaren med logout.php filen-->
      </li>
      <li class="nav-item mt-2">
      <a href='member.php' class='btn btn-dark btn-lg border border-right-0 float-right shadow' role='button'>Tillbaka</a> <!-- Loggar ut användaren med logout.php filen-->
      </li>
    </ul>

<h1> Varukorg </h1>
<div id ="varukorg" class="d-flex flex-row flex-wrap p-3 bg-transparent justify-content-around">

<?php
////  kollar om varukorgen är tom, är den inte det så visas en tabell av varorna upp
    if(!empty($_SESSION['cart'])) { ?>
        <table class="table">
        <tr>
        <th>Produktnamn</th>
        <th>Mängd</th>
        <th>Pris</th>
        <th>Totalt</th>
        <th>Ta bort</th>
    </tr>  
    <?php      
         $total = 0;
         // loopar igenom arrayen och skriver ut alla värde
        foreach($_SESSION['cart'] as $keys => $values) { ?>
        <tr>
            <td><?php echo $values['Produktnamn']; ?></td>
            <td><?php echo $values['antal']; ?></td>
            <td><?php echo $values['Pris']; ?></td>
            <td><?php echo number_format($values['antal']*$values['Pris'], 2); ?></td>
            <td><a href='cart.php?action=delete&ID=<?php echo $values["ID"]; ?>' class='btn btn-danger' role='button'>Ta bort</a></td>
        </tr>
        <?php
        $total = $total + ($values["antal"]*$values["Pris"]);               
        }
        ?>
        <td><h4>Totalbelopp: <?php echo number_format($total, 2); ?></h4></td>
    </table>

        <?php
    }
    else {
        echo "<div id='tom_korg' class='shadow-lg p-3'><h2>Varukorgen är tom</h2></div>";

    }
?> 
</div>
<?php include "footer.html" ?>