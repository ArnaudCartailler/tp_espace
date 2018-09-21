<?php include('header0.php') ?>

<?php

try{

$bdd = new PDO('mysql:host=localhost;dbname=tp_members;charset=utf8', 'root', 'soleil1993');

}

catch(Exception $e){

      die('Erreur : '.$e->getMessage());
}


//  Récupération de l'utilisateur et du mdp
$req = $bdd->prepare('SELECT pseudo, pass FROM members WHERE pseudo = :pseudo');

$req->execute(array(
  'pseudo' => $_POST['pseudo']
));

$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);

if($isPasswordCorrect){

  session_start();

  $_SESSION['pseudo'] = $_POST['pseudo'];

?>


    <div class="redirection">
        <p> Retour à l'accueil ! </p>
    </div>


<?php
  header('Refresh:2; URL=index0.php');

} else {

  echo "Accès refusé, Refus de l'identifiant ou MDP";

}

?>

<?php include('footer.php') ?>
