<?php 
include_once 'connexion.php';
$page = 'Home';
include_once './elements/header.php';
include_once './elements/navbar.php';
include_once './controllers/login.php';
include_once './controllers/signin.php';
?>

<script>home()</script>
<div id="root" align="center">
</div>
<div align='center' id="ro">
    <?php include_once "./controllers/products.php"; ?>
    <h3>Welcome to the shop <span class="uk-badge">+<?=$nbrArticle?> article</span></h3>
    <hr class="uk-width-1-2@s"> 
    <div class="uk-child-width-expand@s uk-width-1-2@s uk-text-center" uk-grid>
        <div>
            <a  class="tri" href="index.php?page=<?= $pageCourante ?>&order=price&by=DESC">Trier plus cher</a>
        </div>
        <div>
            <a class="tri" href="index.php?page=<?= $pageCourante ?>&order=price&by=ASC">Trier moins cher</a>
        </div>
    </div>
    <ul style="display:inline" class="uk-pagination uk-margin" uk-margin>
        <li style="float: left;"><a href="index.php?page=<?=$pageCourante-1?>"><span uk-pagination-previous></span> Page Precedente</a></li>
        <li style="float: right;"><a href="index.php?page=<?=$pageCourante+1?>">Page Suivante<span uk-pagination-next></span> </a></li>
    </ul>
    <div align='left' id="divis" class="uk-grid-match uk-width-6-7 uk-child-width-1-2@s uk-child-width-1-6@l uk-text-center" uk-grid="parallax: 150">
        <?php if($checker>0){ while($a=$article->fetch()){ ?>
            <div>
                <div class="uk-box-shadow-hover-large uk-card uk-card-default">
                    <div class="uk-card-media-top uk-cover-container">
                        <img src="<?=$a['image']?>" alt="<?=$a['name']?>">
                        <canvas width="" height="100px"></canvas>
                    </div>
                    <div class="uk-card-body">
                        <h5><?=$a['name'] ?></h5>
                        <small id="ar<?=$a['sku'] ?>"></small>
                    </div>
                    <div class="uk-card-footer">
                        <?=$a['price'] ?>$
                    </div>
                </div>
            </div>
        
        <?php  }} ?>
    </div>
    <ul class="uk-pagination" uk-margin>
        <li><a href="index.php?page=<?=$pageCourante-1?>"><span uk-pagination-previous></span></a></li>
        <?php for($i=1;$i<=$pageTotal;$i++){
            if($i>7 && ($i%10!=0 || $i%20!=0)) echo '<li> </li>';else{?>
            
            <li><a href="index.php?page=<?=$i?>"><?=$i?></a></li>
        <?php } }?>
        <li><a href="index.php?page=<?=$pageCourante+1?>"><span uk-pagination-next></span></a></li>
    </ul>
</div>

<script src="./assets/js/scripts.js"></script>

<?php include_once './elements/footer.php';?>
