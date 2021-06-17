<?php
    if(isset($_POST['qte']))
    {    
        $id = htmlspecialchars($_GET['id']);
        $user = htmlspecialchars($_SESSION['id']);
        $qte = htmlspecialchars($_POST['qte']);
        $check=$bdd->query('SELECT * FROM panier WHERE id_art="'.$id.'" AND id_user="'.$user.'" AND cmd=0');
        if($qte>0){
            if($check->rowCount()>0){
                $up=$bdd->query('UPDATE panier set qte = '.$qte.' WHERE id_art='.$id.' AND id_user = '.$user);
                $msg="<div class='uk-alert uk-alert-success'>Added successfuly!</div>";
            }else{
                $ins=$bdd->prepare('INSERT INTO panier(id_art,id_user,qte) VALUES(?,?,?)');
                $ins->execute(array($id,$user,$qte));
                header('location : article.php?id='.$id);
            }
        }else{
            $delete = $bdd->query('DELETE FROM panier WHERE id_art='.$id.' AND id_user='.$_SESSION['id']);
        }
    }
?>