<?php
include_once 'connexion.php';
if (isset($_SESSION['id'])) header('location : index.php');
$page = 'Signin';
include_once './elements/header.php';
include_once './elements/navbar.php';
include_once './controllers/signin.php';
?>
<div align='center'>
<h3>Sign in</h3>
<hr class="uk-width-1-2@s">
<p class="uk-margin uk-text-muted">Sign in to the shop right now for free.</p>
<div><?php if (isset($msg)) echo $msg ?></div>
<form method="post" class="uk-grid-small uk-width-1-2@s" uk-grid>
    <div class="uk-width-1-3@s"> <input required class="uk-input" name="prenom" type="text" placeholder="Your firstname"> </div>
    <div class="uk-width-1-3@s"> <input required class="uk-input" name="nom" type="text" placeholder="Your Lastname"> </div>
    <div class="uk-inline uk-width-1-3@s"> <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span><input onkeyup="verify()" required class="uk-input" name="pass" id='pass' type="password" placeholder="Enter your password"></div>
    <div class="uk-width-2-3@s"> <input  required class="uk-input" name="email" type="email" placeholder="Enter your E-mail"> </div>
    <div class="uk-inline uk-width-1-3@s"> <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span> <input onkeyup="verify()" required class="uk-input" name="pass1" id='pass1' type="password" placeholder="Confirm your password"> </div>
    <button class="uk-button uk-button-primary" id='submit' name="sign" type="submit">Sign in</button>
</form>
</div>
<script>
function verify(){
    var pass = document.getElementById('pass').value
    var pass1 = document.getElementById('pass1').value
    if(pass!=pass1){
        document.getElementById('pass').classList.add("uk-form-danger");
        document.getElementById('pass1').classList.add("uk-form-danger");
        document.getElementById('pass1').classList.remove("uk-form-success");
        document.getElementById('pass').classList.remove("uk-form-success");
    }
    if(pass1==pass){
        document.getElementById('pass').classList.remove("uk-form-danger");
        document.getElementById('pass').classList.add("uk-form-success");
        document.getElementById('pass1').classList.remove("uk-form-danger");
        document.getElementById('pass1').classList.add("uk-form-success");
    }
}
</script>
<?php 
include_once './elements/footer.php'
?>