<?php
    $activePage = basename($_SERVER['PHP_SELF'], '.php');
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Mauro Esposito is een student full-stack webdeveloper uit Geel.">
    <meta name="keywords" content="PHP,Geel,HTML,CSS,JavaScript,Laravel,NodeJS,full-stack,web,developer,webdeveloper">
    <meta name="author" content="Mauro Esposito">
    <link href="https://fonts.googleapis.com/css?family=Barlow:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="img/png" href="img/favicon.png"/>
    <?php if ($activePage != 'index'): ?>
    <title><?= ucfirst($activePage); ?> - Mauro Esposito</title>
    <?php else: ?>
    <title>Mauro Esposito</title>
    <?php endif; ?>
</head>