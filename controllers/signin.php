<?php

if(isset($_POST['sign'])){
    $nom = htmlspecialchars(ucfirst($_POST['nom']));
    $prenom =  htmlspecialchars(ucfirst($_POST['prenom']));
    $email= htmlspecialchars($_POST['email']);
    $pass = htmlspecialchars(sha1($_POST['pass']));
    
}


?>