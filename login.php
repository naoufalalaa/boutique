<?php
include_once 'connexion.php';
if(isset($_SESSION['id'])){
    header('location : ./profile.php?id='.$_SESSION['id']);
}else{
$page = 'Login';
include_once './elements/header.php';
include_once './elements/navbar.php';
include_once './controllers/login.php';
?>
<div align='center'>
<h3>Login</h3>
<hr class="uk-width-1-2@s"><?php if (isset($msg1)) echo $msg1 ?><p class="uk-margin uk-text-muted">Login to your account using an email and password.</p>
<div><?php if (isset($msg)) echo $msg ?></div>
<form method="post" class="uk-grid-small uk-width-1-2@s" uk-grid>
    <div class="uk-width-2-3@s"><input required class="uk-input" name="email" type="email" placeholder="Enter your E-mail"></div>
    <div class="uk-inline uk-width-1-3@s"> <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span><input required class="uk-input" name="pass" type="password" placeholder="Confirm your password"></div><button class="uk-button uk-button-primary" name="connect" type="submit">Connect</button>
</form>
</div>
<?php
include_once './elements/footer.php';
}
?>