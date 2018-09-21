
<?php include('header0.php') ?>

<?php

session_start();

if ($_SESSION['pseudo'])
{
  ?>
    <div class="welcome">
      <p> Bienvenue sur le blog, <?php echo ' '.$_SESSION['pseudo'] ?></p>
    </div>

  <?php
}

?>

<?php include('footer.php') ?>
