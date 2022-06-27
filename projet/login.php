<?php
// on récupère les champs de la requête POST
    $pseudo = (isset($_POST['pseudo']))?    $_POST['pseudo'] : null;
    $mdp    = (isset($_POST['mdp']))?       $_POST['mdp'] : null;
// on cherche dans la bdd
    if($pseudo && $mdp)
    {
        $user = null;
        $conn = new mysqli("51.159.27.252:50992", "affichage", "Fenelon@2022", "affichage");
        if(!$conn->connect_error)
        {
            $result = $conn->query("SELECT * FROM comptes where `pseudo`='$pseudo' and `mdp`='$mdp'");
            if($result && $result->num_rows)
            {
                $rows = $result->fetch_row();
                $user = $rows[0];
            }
            else echo ('erreur de requête..' + $conn->error);
            $result->close();
            $conn->close();          
        }
        else echo("erreur de connexion bdd !.. $conn->connect_error");
    }

    if($user>0)
    {
        header("Location: https://www.dev-sandbox.ovh/fenelon/projet/main.php?id=$user");
        exit;
    }
    else
    {
        header('Location: https://www.dev-sandbox.ovh/fenelon/projet/');
        exit;
    }
?>
<!-- code php pour bloquer les utilisateurs nulles 
if (!isset($user != 0))
{
    header("Location: login.php");
    die();
}





-->