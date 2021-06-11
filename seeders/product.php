<?php 
include_once '../connexion.php';
$json = file_get_contents('./products.json');
$ini = json_decode($json,true);
foreach($ini as $row){
    $array=$row['category'];
        $rows.= $row['sku'].' => '.$row['name'].' => '.$row['description'].' => '.$row['price'].' => '.$array[0]['id'].' => '.$array[0]['name'].'<br>';
        $insert = $bdd->prepare('INSERT INTO products(sku,name,description,price,image,catID)VALUES(?,?,?,?,?,?)');
        $insert->execute(array($row['sku'],$row['name'],$row['description'],$row['price'],$row['image'],$array[0]['id']));
        $insertCat = $bdd->prepare('INSERT INTO categorie (id, name)VALUES (?,?)');
        $insertCat->execute(array($array[0]['id'],$array[0]['name']));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h1>Welcome!!</h1>
 <?php 
    if(isset($rows)) echo $rows;
 ?>
</body>
</html>