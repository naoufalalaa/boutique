<?php 
include_once 'connexion.php';
$page = 'Home';
include_once './elements/header.php';
include_once './elements/navbar.php';
include_once './controllers/signin.php';
?>

<script>
home();
// $(document).ready(function()
// {
//     $('#add').click(function()
//     {
//         var id = $('#id').val();
//         var idUser = $('#user').val();
//         var qte = $('#qte').val();

//         $.ajax({
//             url: './controllers/addtocart.php',
//             type: 'POST',
//             data: { id:id, user:idUser, qte:qte },
//             success: function(data)
//             {
//                 alert('Article added to cart!');
//             }
//         })
//     });
// });
</script>
<div id="root" align="center">
</div>
<div align='center' id="ro">
    <?php include_once "./controllers/products.php";include_once "./controllers/addtocart.php"; ?>
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
    <div align='left' id="divis" class="uk-grid-match uk-width-6-7 uk-child-width-1-2@s uk-child-width-1-5@l uk-text-center" uk-grid="parallax: 150">
        <?php if($checker>0){ while($a=$article->fetch()){ ?>
            <div>
                <div class="uk-box-shadow-hover-large uk-card uk-card-default">
                    <div class="uk-card-media-top uk-cover-container">
                        <img src="<?=$a['image']?>" width="200px" height="100px" alt="<?=$a['name']?>">
                    </div>
                    <div class="uk-card-body">
                        <h5><?=$a['name'] ?></h5>
                        <small id="ar<?=$a['sku'] ?>"></small>
                    </div>
                    <div class="uk-card-footer">
                    <a class="uk-button uk-button-secondary" href="#modal-full<?=$a['sku']?>" uk-toggle><small>Add to cart</small></a>    
                    <br> <?=$a['price'] ?>$
                    </div>
                </div>
            </div>
        




            
            <div id="modal-full<?=$a['sku']?>" class="uk-modal-full" uk-modal>
                <div class="uk-modal-dialog">
                    <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                    <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                        <div class="uk-background-cover" style="background-image: url(<?=$a['image']?>);" uk-height-viewport></div>
                        <div class="uk-padding-large">
                            <h1><?=$a['name'] ?></h1>
                            <p><?=$a['description'] ?></p>
                            <form method="post">    
                            <div class="uk-width-2-3@s">
                                <input <?php if(!isset($_SESSION['id'])) echo 'disabled' ?> required class="uk-input" name="qte" type="number" placeholder="Quantity">
                            </div> 
                            <input required name="id" type="hidden" value="<?=$a['sku'] ?>">
                            <?php if(isset($_SESSION['id']) && !empty($_SESSION['id'])){?>
                            <button class="uk-button uk-button-secondary" type="submit">Add</button>
                            <?php }else{?>
                            <button class="uk-button uk-button-secondary" onclick="login();">Connectez-vous en premier</button>
                            <?php }?>
                            </form>
                        </div>
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
