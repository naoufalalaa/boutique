<?php
session_start();
$bdd = new PDO("mysql:host=127.0.0.1;dbname=bouti;charset=utf8", "root", "");
if(isset($_POST['id']))
{    
    $id = htmlspecialchars($_POST['id']);
    $user = htmlspecialchars($_SESSION['idUser']);
    $qte = htmlspecialchars($_POST['qte']);
    $ins=$bdd->prepare('INSERT INTO pannier(id_art,id_user,qte) VALUES(?,?,?)');
    $ins->execute(array($id,$user,$qte));
}
?>