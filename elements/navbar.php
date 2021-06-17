<?php
    if(isset($_SESSION['id'])){
        $panier = $bdd->query('SELECT * FROM panier WHERE id_user='.$_SESSION['id']);
        $cart = $panier->rowCount();
    }
?>
<nav class="uk-navbar-container uk-margin-bottom" uk-navbar="mode: click">

        <div class="uk-navbar-left">
            <div>
                <ul class="uk-navbar-nav">
                    <li id='home'<?php if($page=='Home'){?> class="uk-active" <?php }?>><a type="button" onclick="home()">Home</a></li>
                    <li id='about'><a type="button" onclick="about()">About</a></li>
                </ul>
            </div>
        </div>
        <div class="uk-navbar-center">
            <a class="uk-navbar-item uk-logo" href="#"><img src="assets/img/logo.png" width="40px"/></a>
        </div>
        <div class="uk-navbar-right">
            <div>
                <ul class="uk-navbar-nav">
                <?php 
                if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
                ?>
                    <li>
                        <a href="#"><?=$_SESSION['username']?></a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="./controllers/deconnexion.php">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#"><span uk-icon="icon: cart; ratio:1.5"></span><span class="uk-label uk-label-warning"><small><?=$cart?></small></span></a></li>
                <?php }else{?>
                    <li <?php if($page=='Login'){?>class="uk-active"<?php }?>><a type="button" href="login.php">Login</a></li>
                    <li <?php if($page=='Signin'){?>class="uk-active"<?php }?>><a type="button" href="sign.php">Sign in</a></li>
                <?php }?>
                </ul>
            </div>
        </div>


</nav>