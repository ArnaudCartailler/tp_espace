<?php
session_start();

if (isset($_SESSION['pseudo']))
{
    echo 'Bonjour ' . $_SESSION['pseudo'] . '<br /> <br />';

}

?>

<a href="formmembers.php">S'inscrire</a>

<a href="connexion.php">Se connecter</a>

<a href="deco.php">Se déconnecter</a>

<a href="blog.php">Le blog</a>

<a href="profil.php">Votre profil</a>
