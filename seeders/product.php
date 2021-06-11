<?php 
$json = file_get_contents('/products.json');
$ini = json_decode($json);
$prod = array_map('map',$ini);
function map($prod){
    return [
        'ref' => $prod->sku,
        'name' => $prod->name,
        'description' => $prod->description,
        'image' => $prod->image,
    ];
}
print_r($prod);
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
    <?= $prod?>
</body>
</html>