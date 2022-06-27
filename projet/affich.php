<?php
  $text = '';
  // on se connecte à la base de données MySQL
  $conn = new mysqli("51.159.27.252:50992", "affichage", "Fenelon@2022", "affichage");
  if(!$conn->connect_error)
  {
    // si des données sont envoyées par le formulaire d'ajout de messages
    if (!empty($_POST))     // si la variable $_POST n'est pas vide
    {  
      $info = [];     
      // on récupère les champs envoyés avec un maximum de 100
      for($i=0; $i<100; $i++)
      {
        $name = 'information_'.$i;
        if(isset($_POST[$name]))
          array_push($info, $_POST[$name]);
      }
      // on enregistre les messages dans la base de données
      $text = implode(' - ', $info);
      $conn->query("INSERT INTO `messages` (`text`) VALUES ('$text')");      
    }  
    // si la page est chargée directement sans passer par le formulaire
    // on récupère le dernier message dans la base de données
    else 
    {
      // on list les messages triés par date par ordre descendent et on limite les lignes à 1
      // pour lire le dernier message enregistré
      $result = $conn->query("SELECT `text` FROM `messages` ORDER BY `date` DESC LIMIT 1");
      if($result && $result->num_rows)
      {
        $rows = $result->fetch_row();
        $text = $rows[0];
        $result->close();
      }
      $conn->close();
    }
  }  
?>

<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" type="image/png" href="icon.png" />
    <title>Interface</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .fullpage { 
            background: url(images_fenelon/photobase.jpg) no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            width: 100vw;
            height: 100vh;
        }
        #message {
            font-size: 3em;
            background-color: black;
            color: white;
            padding: 1em; 
        }
    </style>
  </head>
  <body>
    <section>
        <div class="fullpage"></div>
        <div class="fixed-bottom" id="message"><marquee direction="right"></marquee></div>
    </section>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
      // on convertit de PHP à Javascript
      var messages = "<?php echo $text ?>"
      $("#message marquee").html(messages)
    </script>
  </body>
</html>