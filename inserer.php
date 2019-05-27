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
    
    $req = $bdd->prepare('INSERT INTO eleve(nom,prenom,genre,datenaiss,nationalite,classe) VALUES(?,?,?,?,?,?)');
    $req->execute(array($_POST['nom'],$_POST['prenom'],$_POST['genre'],$_POST['datenaiss'],$_POST['nationalite'],$_POST['classe']));

    header('location:ajout.php');
?>