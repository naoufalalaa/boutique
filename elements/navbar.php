<nav class="uk-navbar-container" uk-navbar>

        <div class="uk-navbar-left">
            <div>
                <ul class="uk-navbar-nav">
                    <li id='home' class="uk-active"><a type="button" onclick="home()">Home</a></li>
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
                    <li><a href="#"><?=$_SESSION['username']?></a></li>
                    <li><a href="./controllers/deconnexion.php">Logout</a></li>
                <?php }else{?>
                    <li id='log'><a type="button" onclick="login()">Login</a></li>
                    <li id='sign'><a type="button" onclick="sign()">Sign in</a></li>
                <?php }?>
                </ul>
            </div>
        </div>


</nav>