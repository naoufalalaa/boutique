<?php
    include_once '../connexion.php';
    $id = htmlspecialchars($_GET['id']);     
    $check=$bdd->query('SELECT * FROM panier WHERE id_art='.$id.' AND id_user='.$_SESSION['id']);
    if($check->rowCount()>0){
        $c=$check->fetch();
        $qte=$c['qte']+1;
        $up=$bdd->query('UPDATE panier set qte='.$qte.' WHERE id_art='.$id.' AND id_user = '.$_SESSION['id']);
    }
header('location : ../index.php');
?>
