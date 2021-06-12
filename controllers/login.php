<?php

    if(isset($_POST['connect'])){
        $email=htmlspecialchars($_POST['email']);
        $pass=htmlspecialchars(sha1($_POST['pass']));
        $check = $bdd->query('SELECT * FROM users WHERE email ="'.$email.'" AND password = "'.$pass.'"') ;
        if($check->rowCount()>0){
            $user = $check->fetch();
            $_SESSION['id']= $user['id'];
            $_SESSION['username'] = explode('@',$user['email'])[0];
            header('location : index.php');
        }else{
            $msg1 = '<div class="uk-alert uk-width-1-2@s uk-alert-danger">Identifient non reconnus!</div>';
        }
    }

?>