<?php

if(isset($_POST['sign'])){
    $nom = htmlspecialchars(ucfirst($_POST['nom']));
    $prenom = htmlspecialchars(ucfirst($_POST['prenom']));
    $email= htmlspecialchars($_POST['email']);
    $pass = htmlspecialchars(sha1($_POST['pass']));
    $pass1 = htmlspecialchars(sha1($_POST['pass1']));
    if($pass===$pass1){
        $check = $bdd->query('SELECT * FROM users WHERE email = "'.$email.'"');
        if($check->rowCount()>0) $msg = "<div class='uk-alert uk-alert-danger'>Sorry this email is already used !</div>";
        else{
            $insert = $bdd->prepare('INSERT INTO users(email,name,lastname,password) VALUES(?,?,?,?)');
            $insert->execute(array($email,$prenom,$nom,$pass));
            $msg="<div class='uk-alert uk-alert-success'>You were signed in successfuly!</div>";
        }
    } else{
        $msg = "<div class='uk-alert uk-alert-danger'>Different passwords !</div>";
    }
}


?>