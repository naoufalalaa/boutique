<?php
    if(isset($_SESSION['id'])){
        $panier = $bdd->query('SELECT * FROM panier WHERE id_user='.$_SESSION['id'].' AND cmd=0');
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
                    <li><a href="#offcanvas-usage" uk-toggle><span uk-icon="icon: cart; ratio:1.5"></span><span class="uk-label uk-label-warning"><small><?=$cart?></small></span></a></li>



                    <div id="offcanvas-usage" uk-offcanvas="flip: true">
                        <div class="uk-offcanvas-bar">

                            <button class="uk-offcanvas-close" type="button" uk-close></button>

                            <h3><span uk-icon="icon: cart;"></span> MY Cart <small><span>(<?=$panier->rowCount()?>)</span></small></h3>

                            <ul class="uk-list uk-list-divider">
                                <?php $total=0;
                                 while($p=$panier->fetch()){
                                    $pprr=$bdd->query('SELECT * FROM products WHERE sku='.$p['id_art']);
                                    $pname=$pprr->fetch();
                                    $nam=$pname['name'];
                                    $price=$pname['price'];
                                    $price*=$p['qte'];
                                ?>
                                <li><a href="./controllers/minus.php?id=<?=$pname['sku'] ?>" ><span style="background: red; padding: 5px 10px; border-radius:15px; margin-right:5px">-</span></a><small><?=$nam ?> <small>(<?=$p['qte'] ?>)</small></small> <a href="./controllers/add.php?id=<?=$pname['sku'] ?>" ><span style="background: green; padding: 5px 10px; border-radius:15px; margin-right:5px">+</span></a><br>
                                <?= $price?>$
                                </li>
                                <?php $total+=$price;}?>
                                <li><div style="float: left;"><?=$total?> $</div><div style="float: right;"><button class="uk-button uk-button-primary" href="./controllers/commander.php?id=<?=$pname['sku'] ?>">COMMANDER</button></div></li>
                            </ul>
                            
                        </div>
                    </div>
                <?php }else{?>
                    <li <?php if($page=='Login'){?>class="uk-active"<?php }?>><a type="button" href="login.php">Login</a></li>
                    <li <?php if($page=='Signin'){?>class="uk-active"<?php }?>><a type="button" href="sign.php">Sign in</a></li>
                <?php }?>
                </ul>
            </div>
        </div>


</nav>