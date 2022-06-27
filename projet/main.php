<?php
  // session_start();
  // require_once 'config.php';

  // if(isset($_POST['pseudo'] && isset($_POST['mdp']))){
  //   $pseudo= htmlspecialchars($_POST['pseudo']);
  //   $mdp=sha1($_POST['mdp']);
  // }
  //$bdd = new PDO('mysql:host=localhost:3306;dbname=affichage;charset=utf8;', 'root', 'root');
  //echo $_SESSION['id'];


  /************ requestes ****************/
  // INSERT INTO `messages`(`info`) VALUES ("brisson est parti")
?>


<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="icon.png" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <title>Page Administrateur-Accueil</title>
  </head>
  <body>
    <nav>
        <img src="images_fenelon/logo_transparent.png"/>
        <div class="onglets">
            <a href="index.php">Home</a>
            <a href="https://www.fenelonsup.org/">Contact</a>
            <!-- <a href="affich.php">Affiche</a> -->
        </div>
    </nav>
    <header> 
        <h1>Page Administrateur</h1>
        <h4>Que voulez vous afficher ?</h4>
        <a href="#formulaire"><button>Parcourir les informations</button></a>
    </header>

    <form id="formulaire" method="POST" action="affich.php">
      <center>
      <fieldset>
        <legend align="center">Veuillez remplir le formulaire</legend>
      <p>Combien d'informations voulez vous afficher?</p>
      <center>
        <input type="number" min="0" max="50" id="taille_liste"> 
      </center>
      </fieldset>

      <fieldset id="donnees" width="100%"></fieldset>
      
      <button type="submit" name="envoyer">Confirmer</button>
      <!-- à remplacer par un input -->
    </fieldset>
    </center>
  
    </form>

    <footer>
        <h1>Fénelon Sup Paris</h1>
        <div class="services">
          <div class="service">
            <img src="images_fenelon/fsmlpmlogofooter.png" />
            <p>Groupe scolaire Fénelon Sainte-Marie - La Plaine Monceau</p>
          </div>
          <div class="service">
            <h2>Contact</h2>
              <p>9 Boulevard de Courcelles, 75008 Paris</p>
              <p>01 43 87 54 05</p>
          </div>
          <div class="service">
            <h2>Nos réseaux</h2>
              <a href="https://www.facebook.com/Fenelon-Sup-318677188797461/"><i class="fa-brands fa-facebook"></i></a>
              <a href="https://www.linkedin.com/company/fenelonsup/"><i class="fa-brands fa-linkedin"></i></a>
              <a href="https://www.instagram.com/fenelonsup/"><i class="fa-brands fa-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UCV_TgqOJFd2KZEx_8iQneoQ/videos"><i class="fa-brands fa-youtube"></i></a>
          </div>
        </div>
    </footer>
<!-- code javascript pour afficher les labels en fonctions du nombre -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   
    <script>
//      $('input[type="radio"]').click( function(e) {

      $("#taille_liste").change( function(e) {
        console.log('click!', $(this).val())
        $('#donnees').empty()
        for(let i=0; i<$(this).val(); i++)
        {
          // $('#donnees').append("<label>Inscrivez l'information</label><br/>")
          let name = 'information_' + $('.info').length
          $('#donnees').append("<input class='info' type='texte' placeholder='Inscrivez une information' name='"+name+"' value=''><br>")
        }
      })
    </script>

  </body>
</html>