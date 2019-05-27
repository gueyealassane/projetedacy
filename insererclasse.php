<?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=lycee','root','');
        echo "acces autorisés";
    }
    catch(Exception $e)
    {
        die('Erreur :' .$e->getMessage());
    }
    
    $req = $bdd->prepare('INSERT INTO classe(nom,effectif) VALUES(?,?)');
    $req->execute(array($_POST['nom'],$_POST['effectif']));

    header('location:ajoutclasse.php');
?>