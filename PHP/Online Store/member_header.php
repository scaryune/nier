<!DOCTYPE html>
<html lang="sv">

<head>
     <meta charset="utf-8" />
     <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> 
     <link rel="stylesheet" href="style.css">
     <script src="https://kit.fontawesome.com/0ee8957346.js" crossorigin="anonymous"></script>
</head>
     <header>
          <nav class="navbar d-flex shadow-lg p-3 bg-dark text-white">
               <div class="p-2 mr-auto bg-dark">
                    <a href="start.php"><h1>En online butik</h1></a>
               </div>
               <h2 class="mr-4 text-white">
               <?php echo "Välkommen" . " " . $_SESSION['Email']; ?> 
                </h2>
                <button class="btn">    
                    <h3><a href="cart.php"><i class="fas fa-shopping-cart ml-5">
                        <?php
                        // kollar om det finns en varukorg, räknar upp varorna med count och skriver ut dom
                        if (isset($_SESSION['cart'])) {
                            $count = count($_SESSION['cart']);
                            echo "<span id='items_in_cart' class='text-dark bg-light rounded-lg px-2'>$count</span>";
                        }
                        else {
                            echo "<span id='items_in_cart' class='text-dark bg-light rounded-lg px-2'>0</span>";
                        }
                        ?>
                    </i></a></h3>
                </button>                     
                    </nav>                     
     </header>
     <body>