<?php
session_start();

if (isset($_SESSION['pseudo']))
{
    echo 'Bonjour ' . $_SESSION['pseudo'] . '<br /> <br />';

}
?>

<?php include('header0.php') ?>

<?php include('footer.php') ?>
