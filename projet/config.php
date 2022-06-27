<?php
    try{
        $bdd = new PDO('mysql:host=localhost:3306;dbname=affichage;charset=utf8;', 'root', 'root');
        // $bdd = new PDO('mysql:host=51.159.27.252:50992;dbname=affichage;charset=utf8;', 'affichage', 'Fenelon@2022');
    }catch(Exception $e){
        die('Erreur'.$e->getMessage());
    }
    
    


?>