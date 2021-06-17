<?php
include_once 'connexion.php';
$page = 'Home';
include_once './elements/header.php';
include_once './elements/navbar.php';
include_once "./controllers/products.php";
$article = $bdd->query('SELECT * FROM products WHERE sku="' . $_GET['id'] . '"');
if ($article->rowCount() == 0) header('location : index.php');
else $a = $article->fetch();
include_once "./controllers/addtocart.php";
if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    $paniere = $bdd->prepare('SELECT * FROM panier WHERE id_art=? AND id_user=?');
    $paniere->execute(array($_GET['id'], $_SESSION['id']));
    if ($paniere->rowCount() > 0) {
        $exist = $paniere->fetch();
        $qteuser = $exist['qte'];
    }
}
?>

<div align='center'>
    <div class="uk-card uk-width-5-6 uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
        <div class="uk-card-media-left uk-cover-container">
            <div uk-lightbox>
                <a class="uk-button uk-button-default" href="<?= $a['image'] ?>" data-caption="<?= $a['name'] ?>"><img src="<?= $a['image'] ?>" alt="" uk-cover></a>
            </div>
            <canvas width="600" height="400"></canvas>
        </div>
        <div>
            <div class="uk-card-body" align='left'>
                <h3 class="uk-card-title"><?= $a['name'] ?></h3>
                <p><?= $a['description'] ?></p>
                <div>
                    <?php if (isset($msg)) { ?><div class="uk-alert uk-alert-success"><?= $msg ?></div><?php } ?>
                    <form method="post">
                        <div class="uk-margin">
                            <input class="uk-input uk-form-width-medium" min="1" id='qte' name='qte' <?php if (isset($exist)) { ?> value="<?= $qteuser ?>" <?php } ?> type="number" placeholder="Quantity">
                        </div>
                        <?php if (isset($_SESSION['id'])) { ?>
                            <button type="submit" class="uk-button uk-button-secondary"><span uk-icon="icon: cart;"></span> Add to Cart</button>
                        <?php } else { ?>
                            <button disabled class="uk-button uk-button-secondary"><span uk-icon="icon: cart;"></span> Add to Cart</button>
                            <a href="login.php">Login first</a>
                        <?php } ?>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once './elements/footer.php'
?>