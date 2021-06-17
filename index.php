<?php 
include_once 'connexion.php';
$page = 'Home';
include_once './elements/header.php';
include_once './elements/navbar.php';
include_once "./controllers/products.php";
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

<div align='center'>
    <h3>Welcome to the shop <span class="uk-badge">+<?=$nbrArticle?> article</span></h3>
    <div class="uk-child-width-expand@s uk-width-1-2@s uk-text-center" uk-grid>
        <div>
            <a  class="tri" href="index.php?page=<?= $pageCourante ?>&order=price&by=DESC">Trier plus cher</a>
        </div>
        <div>
            <a class="tri" href="index.php?page=<?= $pageCourante ?>&order=price&by=ASC">Trier moins cher</a>
        </div>
    </div>
   
    <div align='left' id="divis" class="uk-grid-match uk-width-6-7 uk-child-width-1-2@s uk-child-width-1-3@l uk-text-center" uk-grid>
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
                    <a class="uk-button uk-button-secondary" href="article.php?id=<?=$a['sku']?>" uk-toggle><small>Add to cart</small></a>    
                    <br> <?=$a['price'] ?>$
                    </div>
                </div>
            </div>
        <?php  }} ?>
    </div>
    <ul class="uk-pagination" uk-margin>
        <li><a href="index.php?page=<?=$pageCourante-1?>"><span uk-pagination-previous></span></a></li>
        <?php for($i=1;$i<=$pageTotal;$i++){?>
            <li><a href="index.php?page=<?=$i?>"><?=$i?></a></li>
        <?php }?>
        <li><a href="index.php?page=<?=$pageCourante+1?>"><span uk-pagination-next></span></a></li>
    </ul>
</div>

<script src="./assets/js/scripts.js"></script>

<?php include_once './elements/footer.php';?>
