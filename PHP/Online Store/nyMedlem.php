<?php include "header.html"; ?>

<section class="ny_medlem_form">
<h1>Bli medlem</h1>

   <div class="ny_medlem_container">
   <!-- Skickar inloggningsuppgifterna till check_new_user.php med POST för att kontrollera användaren och dom ifyllda fälten-->
      <form action="check_new_user.php" method="post">
             <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="fname" placeholder="Förnamn">
              </div>
              <?php if (isset($_GET['error1'])) { 
                $error = $_GET['error1'];
             echo "<div class='alert alert-danger alert-dismissible fade show'>
                  <button type='button' class='close' data-dismiss='alert'>&times;</button>" . "$error" . "</div>"; } ?>
              

              <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="ename" placeholder="Efternamn">
              </div>
              <?php if (isset($_GET['error2'])) { 
                $error = $_GET['error2'];
             echo "<div class='alert alert-danger alert-dismissible fade show'>
                  <button type='button' class='close' data-dismiss='alert'>&times;</button>" . "$error" . "</div>"; } ?>


             <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="email" placeholder="Email">
              </div>
              <?php if (isset($_GET['error3'])) { 
                $error = $_GET['error3'];
             echo "<div class='alert alert-danger alert-dismissible fade show'>
                  <button type='button' class='close' data-dismiss='alert'>&times;</button>" . "$error" . "</div>"; } ?>


              <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="adress" placeholder="Adress">
              </div>
              <?php if (isset($_GET['error4'])) { 
                $error = $_GET['error4'];
             echo "<div class='alert alert-danger alert-dismissible fade show'>
                  <button type='button' class='close' data-dismiss='alert'>&times;</button>" . "$error" . "</div>"; } ?>


              <div class="mb-3 form-inline justify-content-between">
                  <input type="text" class="flex-fill mr-1 form-control form-control-lg" name="postnr" placeholder="Postnummer">
                  <input type="text" class="flex-fill ml-1 form-control form-control-lg" name="stad" placeholder="Stad">
              </div>
             <div class="form-group">
                 <input type="password" class="form-control form-control-lg" name="password" placeholder="Lösenord">
                 <input type='hidden' class='form-control' name='roll' value='Medlem'>
             </div>
             <div class="form-inline mt-4">
                  <input type="submit" class="btn btn-info btn-lg flex-fill shadow mr-3 ml-5" value="Bli medlem">
                  <a href='login.php' class='btn btn-dark btn-lg flex-fill shadow ml-3 mr-5' role='button'>Tillbaka</a>

             </div>
     </form>
    </br>    
    </div>
</section>

<?php include "footer.html"; ?>