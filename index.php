<?php 
include_once 'connexion.php';
$page = 'Home';
include_once './elements/header.php';
include_once './elements/navbar.php';
include_once './controllers/login.php';
include_once './controllers/signin.php';
?>
<script src="./assets/js/scripts.js"></script>

<div id="root" align="center">
</div>
<script>home()</script>
<div id="ro"></div>

<?php include_once './elements/footer.php';?>
