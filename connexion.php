<?php
try
{
    $bdd = new PDO ('mysql:host = localhost ; dbname=lycee','root','');

    echo 'acces autorisé';
    
}
catch(Exception $e)
{
    die('Erreur :'.$e->getMessage());
}
?>