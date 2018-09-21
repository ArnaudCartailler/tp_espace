<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Espace_TP</title>
  <meta name="description" content="TP_membre">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body>

<div class="container-fluid">

  <div class ="row text-center">

      <div class="col-md-4 signin">
        <a href="formmembers.php">S'inscrire</a>
      </div>

      <div class="col-md-4 connexion">
        <a href="connexion.php">Se connecter</a>
      </div>

      <div class="col-md-4 blog">
        <a href="blog.php">Le blog</a>
      </div>

  </div>

</div>

        <form action="addmembers.php" method="post" enctype="multipart/form-data">

                          <p class="title"> Inscrivez vous ! </p>

                          <p>Veuillez taper votre pseudo:</p>
                            <input type="text" name="pseudo" />

                          <p>Veuillez taper votre mot de passe:</p>
                            <input type="password" name="pass" />

                            <p>Veuillez confirmer votre mot de passe:</p>
                              <input type="password" name="pass2" />

                            <p>Veuillez taper votre email:</p>
                              <input type="email" name="email" />

                            <p >Valider :</p>
                              <input class="sub" type="submit" name="valid" value="Valider l'inscription" />
             </form>

<?php include('footer.php') ?>
