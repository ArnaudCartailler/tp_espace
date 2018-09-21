<?php
session_start();
?>

<?php include('header0.php') ?>

<?php

if (isset($_SESSION['pseudo']))

{

?>
  <div class="welcome">
    <p> Bonjour<?php echo ' '.$_SESSION['pseudo'] ?></p>
  </div>

<?php

}

?>

<?php include('footer.php') ?>
