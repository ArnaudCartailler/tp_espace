<?php

try{

$bdd = new PDO('mysql:host=localhost;dbname=tp_members;charset=utf8', 'root', 'soleil1993');

}

catch(Exception $e){

      die('Erreur : '.$e->getMessage());
}

if (isset($_POST['pseudo'])){

    $req = $bdd->prepare('SELECT pseudo, pass FROM members WHERE pseudo = :pseudo, pass = :pass');


    $req->execute(array(
      'pseudo' => $_POST['pseudo']
      'pass' => $_POST['pass1']
    ));


    $array = $req->fetchAll();

    if($_POST['pseudo'] != $_SESSION['pseudo']){

      $diffPseudo == true;
      echo 'Saisie incorrect, veuillez recommencer';
      header('Refresh:2; URL=changeprofil.php');

    }

    if($POST['pass1'] == $_POST['pass2']){

      echo 'C\'est le même mdp, changement refusé';
      header('Refresh:2; URL=changeprofil.php');

    }

    if($POST['pass2'] == $_POST['pass3']){

      $diffPass == false;

    }

      if ( $diffPseudo == false AND $diffPass == false){

            $pass_hache = password_hash($_POST['pass2'], PASSWORD_DEFAULT);

            $stmt = $bdd->prepare("UPDATE members SET pseudo = :pseudo, $pass_hache = :pass");

            $stmt->bindParam(':pseudo', $_POST['pseudo']);
            $stmt->bindParam(':pass', $pass_hache);

            $stmt->execute();

                 echo 'Changement effectué';
                header('Refresh:1; URL=connexion.php');
                unset($bdd);
             }

             else{

                echo 'Saisie incorrect, veuillez recommencer';
                header('Refresh:2; URL=changeprofil.php');

             }

}
