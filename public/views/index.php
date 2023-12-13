<?php 
    require_once 'controllers';
    require_once ''
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>


    <?$rss = simplexml_load_file('http://rss.cnn.com/rss/edition.rss'); 
    var_dump($rss);?>
</body>
</html>

<?
?>