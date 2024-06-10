<?php include "header.html"; ?>

<section class="loginform">
<h2>Logga in</h2>

   <div id="logincontainer" class="w-50 mx-auto">
   <!-- Skickar inloggningsuppgifterna till checkUser.php med POST för att kontrollera användaren och dom ifyllda fälten-->
      <form action="checkUser.php" method="post">
             <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="email" placeholder="Email">
              </div>

             <div class="form-group">
                 <input type="password" class="form-control form-control-lg" name="password" placeholder="Lösenord">
             </div>
             <?php if (isset($_GET['error'])) { // hämtar felmeddelandena från checkUser
                $error = $_GET['error'];
             echo "<div class='alert alert-danger alert-dismissible fade show'>
                  <button type='button' class='close' data-dismiss='alert'>&times;</button>" . "$error" . "</div>"; } ?>
               <?php if (isset($_GET['success'])) {
               $success = $_GET['success'];
             echo "<div class='alert alert-success alert-dismissible fade show'>
                  <button type='button' class='close' data-dismiss='alert'>&times;</button>" . "$success" . "</div>"; } ?>
             <div class="form-group">
                  <input type="submit" class="btn btn-dark btn-lg shadow" value="Logga in">
                  <a href='nyMedlem.php' class='btn btn-info btn-lg shadow' role='button'>Bli medlem</a>
             </div>
     </form>
    </br>    
    </div>
</section>

<?php include "footer.html"; ?>
