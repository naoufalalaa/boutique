<?php 
echo '
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique ';
    
    if(isset($page)) echo ' - '.$page;
    echo '</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.22/css/uikit.min.css" integrity="sha512-dfbsuqWeCWwIEAtxRPRRHH0kwIR4+igihRwavxSQzrbidK+/SAQvODRxHzYCQ8IQfglfUCzIM5L1neEC4+lALQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>';
?>