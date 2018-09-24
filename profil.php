<?php include('header0.php') ?>

<form action="changeprofil.php" method="post" enctype="multipart/form-data">

                  <p>Changer votre pseudo:</p>
                    <inputtype="text" name="pseudo" required />

                    <p>Veuillez taper votre ancien mot de passe:</p>
                      <input type="password" name="pass1" required />

                  <p>Veuillez taper votre nouveau mot de passe:</p>
                    <input type="password" name="pass" required />

                    <p>Veuillez confirmer votre nouveau mot de passe:</p>
                      <input type="password" name="pass3" required />

                    <p>Valider :</p>
                      <input type="submit" name="valid" value="Valider" />
     </form>


<?php include('footer.php') ?>
