<?php

    try{

    $bdd = new PDO('mysql:host=localhost;dbname=tp_members;charset=utf8', 'root', 'soleil1993');

    }

    catch(Exception $e){

          die('Erreur : '.$e->getMessage());

    }


  if (isset($_POST['email'])){

      $_POST['email'] = htmlspecialchars($_POST['email']);

      $req = $bdd->prepare('SELECT pseudo FROM members WHERE pseudo = :pseudo');


      $req->execute(array(
        'pseudo' => $_POST['pseudo']
      ));

      $array = $req->fetch();

      // foreach($array as $diff){
      //   if('pseudo' != $_POST['pseudo']){
      //     $diff === true;
      //   }
      // }

      if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']) AND ($array['pseudo'] != $_POST['pseudo']))
            {

              $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);

              $stmt = $bdd->prepare("INSERT INTO members(pseudo, pass, email, date_inscription) VALUES (:pseudo, :pass, :email, NOW())");

              $stmt->bindParam(':pseudo', $_POST['pseudo']);
              $stmt->bindParam(':pass', $pass_hache);
              $stmt->bindParam(':email', $_POST['email']);

              $stmt->execute();

                   echo 'Vous êtes inscrit';
                  header('Refresh:1; URL=connexion.php');
                  unset($bdd);
               }

               else{

                  echo 'Saisie incorrect, veuillez recommencer';
                  header('Refresh:2; URL=formmembers.php');

               }

}
