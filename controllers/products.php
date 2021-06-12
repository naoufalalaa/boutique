<?php
$articles=$bdd->query('SELECT * FROM products ORDER BY sku DESC');
$nbrArticle=$articles->rowCount();
$articlePerPage=120;
$pageTotal = ceil($nbrArticle/$articlePerPage);
if(isset($_GET['page']) && $_GET['page']>0 && $_GET['page']<=$pageTotal){
    $_GET['page'] = intval($_GET['page']);
    $pageCourante = $_GET['page'];
}else{
    $pageCourante = 1;
}
$depart = ($pageCourante-1)*$articlePerPage;
if(isset($_GET['order'])){
    if(empty($_GET['by']) || $_GET['by']==='ASC'){
        $article = $bdd->query('SELECT * FROM products ORDER BY price LIMIT '.$depart.','.$articlePerPage);
    }
    elseif($_GET['by']==='DESC') $article = $bdd->query('SELECT * FROM products ORDER BY price DESC LIMIT '.$depart.','.$articlePerPage);
    
}
else $article = $bdd->query('SELECT * FROM products LIMIT '.$depart.','.$articlePerPage);
$checker = $article->rowCount();
?>