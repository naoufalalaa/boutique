<?php 
$bdd = new PDO("mysql:host=127.0.0.1;dbname=bouti;charset=utf8", "root", "");
$json = file_get_contents('./products.json');
$ini = json_decode($json,true);
$cmpt=0;
foreach($ini as $row){
       $array=$row['category'];
        $rows.= $row['sku'].' => '.$row['name'].' => '.$row['description'].' => '.$row['price'].' => '.$array[0]['id'].' => '.$array[0]['name'].'<br>';
    if($cmpt<=100){
        $insert = $bdd->prepare('INSERT INTO products(sku,name,description,price,image,catID)VALUES(?,?,?,?,?,?)');
        $insert->execute(array($row['sku'],$row['name'],$row['description'],$row['price'],$row['image'],$array[0]['id']));
    }
    echo $cmpt.' ';
    echo $array[0]['id'].' <br>';
    $check = $bdd->query('SELECT * FROM categorie WHERE id="'.$array[0]['id'].'"');
        if($check->rowCount()==0){
            $insertCat = $bdd->prepare('INSERT INTO categorie (id, name)VALUES (?,?)');
            $insertCat->execute(array($array[0]['id'],$array[0]['name']));
        }
    $cmpt++;
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