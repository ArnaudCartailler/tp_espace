<?php

session_start();

try{

$bdd = new PDO('mysql:host=localhost;dbname=tp_members;charset=utf8', 'root', 'soleil1993');

}

catch(Exception $e){

      die('Erreur : '.$e->getMessage());
}


    if($_POST['pseudo'] != $_SESSION['pseudo']){

      $diffPseudo = true;
      echo 'a';

    }

    if($POST['pass1'] != $_POST['pass']){
      echo 'b';

      $diffOldPass = true;
    }

    if($_POST['pass'] == $_POST['pass3']){
      echo 'c';

      $diffPass = true;

    }
var_dump($diffPass);

      if ( $diffPseudo AND $diffPass AND $diffOldPass){

          $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);

          $req = $bdd->prepare('SELECT * FROM members WHERE pseudo = :pseudo');

          $req->execute(array(
            'pseudo' => $_SESSION['pseudo'],
            'pass' => $_POST['pass']
          ));

          $received = $req->fetch();

           $req->closeCursor();

          if(!empty($_POST['pseudo'])){
echo "z";
              $req = $bdd->prepare('UPDATE members SET pseudo = :pseudo, pass = :pass WHERE pseudo = :oldpseudo');
              $req->execute(array(
              'pseudo' => $_POST['pseudo'],
              'pass' => $pass_hache,
              'oldpseudo' => $_SESSION['pseudo']
              ));

                  echo 'Changement effectué';
                  header('Refresh:1; URL=connexion.php');
                  unset($bdd);

        }

             else{

                echo 'Incorrect';
                header('Refresh:2; URL=changeprofil.php');

          }

}
