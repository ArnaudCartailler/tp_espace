
<?php

session_start();

if ($_SESSION['pseudo'])
{
    echo 'Bienvenue sur le blog ' . $_SESSION['pseudo'];
}

?>

<h1>blog</h1>

<?php include('header0.php') ?>


<?php include('footer.php') ?>
