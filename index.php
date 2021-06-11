<?php 
include_once 'connexion.php';
$page = 'Home';
include_once './elements/header.php';
include_once './elements/navbar.php';
include_once './controllers/login.php';
include_once './controllers/signin.php';
?>

<div id="signin" align="center"></div>

<script>
function sign(){
    document.getElementById('signin').innerHTML='<h3>Sign in</h3><hr class="uk-width-1-2@s"><p class="uk-margin uk-text-muted">Sign in to the shop right now for free.</p><div><?php if(isset($msg)) echo $msg ?></div><form class="uk-grid-small uk-width-1-2@s" uk-grid>    <div class="uk-width-1-3@s">        <input class="uk-input" name="prenom" type="text" placeholder="Your firstname">    </div>    <div class="uk-width-1-3@s">        <input class="uk-input" name="nom" type="text" placeholder="Your Lastname">    </div>    <div class="uk-inline uk-width-1-3@s">        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>                        <input class="uk-input" name="pass1" type="password" placeholder="Enter your password">    </div>    <div class="uk-width-2-3@s">        <input class="uk-input" name="email" type="email" placeholder="Enter your E-mail">    </div>        <div class="uk-inline uk-width-1-3@s">        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>                        <input class="uk-input" name="pass" type="password" placeholder="Confirm your password">    </div></form>'
    document.getElementById('home').classList.remove('uk-active')
    document.getElementById('about').classList.remove('uk-active')
    document.getElementById('log').classList.remove('uk-active')
    document.getElementById('sign').classList.add('uk-active')
}
function login(){
    document.getElementById('signin').innerHTML='<h3>Login</h3><hr class="uk-width-1-2@s"><p class="uk-margin uk-text-muted">Login to your account using an email and password.</p><div><?php if(isset($msg)) echo $msg ?></div><form class="uk-grid-small uk-width-1-2@s" uk-grid><div class="uk-width-2-3@s"><input class="uk-input" name="email" type="email" placeholder="Enter your E-mail"></div>        <div class="uk-inline uk-width-1-3@s">        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>                        <input class="uk-input" name="pass" type="password" placeholder="Confirm your password">    </div></form>'
    document.getElementById('home').classList.remove('uk-active')
    document.getElementById('about').classList.remove('uk-active')
    document.getElementById('sign').classList.remove('uk-active')
    document.getElementById('log').classList.add('uk-active')
}

</script>

<?php include_once './elements/footer.php';?>
