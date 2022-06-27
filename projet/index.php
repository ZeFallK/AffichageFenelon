<?php 
    //session_start();
    //   session_start();
    //   $bdd = new PDO('mysql:host=localhost:3306;dbname=affichage;charset=utf8;', 'root', 'root');
     
    //   if (isset(($_POST['envoi']))){
    //      if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
    //          $pseudo= htmlspecialchars($_POST['pseudo']);
    //          $mdp=sha1($_POST['mdp']);
    //          //$insertUser = $bdd->prepare('INSERT INTO users(pseudo,mdp) VALUES(?,?)');
    //          //$insertUser->execute(array($pseudo, $mdp));

    //          $recupUser= $bdd->prepare('SELECT * FROM users WHERE pseudo = "admin" AND mdp = "admin"');
    //          $recupUser= $bdd->execute(array($pseudo, $mdp));

    //          if($recupUser->rowCont() > 0){
    //              $_SESSION['pseudo'] = $pseudo;
    //              $_SESSION['mdp'] = $mdp;
    //              $_SESSION['id'] = $recupUser->fetch()['id'];
    //              header('Location: main.php');
    //              session_start();
    //              exit;
    //          }else{
    //              echo"Erreur";
    //          }
    //      }else{
    //          echo("<p style='color:red'>Veuillez compléter tous les champs !<p>");
    //      }
    //  }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="icon.png" />
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Page Administrateur-Connexion</title>
    </head>

    <body>
        <form method="POST" action="login.php">
            <div class="partieHaute">
                <img src="images_fenelon/FSMLPMlogo.png" alt="Image" height="90" width="300" class="center" />
                <h1>Connectez-vous !</h1>
            </div>

            <div class="inputs">
                <input type="text" placeholder="Nom d'utilisateur" autocomplete="off" name="pseudo">
                <input type="password" placeholder="Mot de passe" autocomplete="off" name="mdp">
            </div>
            
            <div align="center">
                <button type="submit" name="envoi">Se connecter</button>
            </div>

        </form>

    </body>
</html> 
<!-- action="main.php" -->
<!-- //  define('DB_SERVER', 'localhost:3306');
    //  define('DB_USERNAME', 'root');
    //  define('DB_PASSWORD', 'root');
    //  define('DB_NAME', 'affichage');

    //  try{
    //      $pdo = new PDO("mysql:host=". DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);

    //      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //  }
    //  catch(PDOException $e){
    //      die("ERROR: Could NOT connect" . $e->getMessage());
    //  } --> 

