
<?php

session_start();

if ($_SESSION['pseudo'])
{
    echo 'Bienvenue sur le blog ' . $_SESSION['pseudo'];
}

?>

<p>blog</p>
