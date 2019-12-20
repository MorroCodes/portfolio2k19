<?php
    $activePage = basename($_SERVER['PHP_SELF'], '.php');
    ?>
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TMQ66SP');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Meta tags voor SEO -->
    <meta name="description" content="Mauro Esposito is a student full-stack web developer based in Geel, Belgium.">
    <meta name="keywords" content="PHP,Geel,HTML,CSS,JavaScript,Laravel,NodeJS,full-stack,web,developer,webdeveloper,websockets">
    <meta name="author" content="Mauro Esposito">
    <!-- Twitter tags -->
    <meta name="twitter:domain" content="http://mauroesposito.be/">
    <meta name="twitter:url" content="http://mauroesposito.be/">
    <meta name="twitter:site" content="@mauroesposito_">
    <meta name="twitter:creator" content="@mauroesposito_">
    <meta name="twitter:image" content="http://mauroesposito.be/img/open_graph_image.png" />
    <meta name="twitter:description" content="Mauro Esposito is a student full-stack web developer based in Geel, Belgium.">

    <!-- Open graph tags voor Facebook etc.-->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://mauroesposito.be/" />
    <meta property="og:image" content="http://mauroesposito.be/img/open_graph_image.png" />
    <link href="https://fonts.googleapis.com/css?family=Barlow:300,400,700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" type="img/png" href="img/favicon.png"/>
    <?php if ($activePage != 'index'): ?>
    <!-- Titel aanpassen afhankelijk van naar welke pagina er word verwezen -->
    <title><?= ucfirst($activePage); ?> - Mauro Esposito</title>
    <meta property="og:title" content="<?= ucfirst($activePage); ?> - Mauro Esposito" />
    <meta name="twitter:title" content="<?= ucfirst($activePage); ?> - Mauro Esposito" />

    <?php else: ?>
    <title>Mauro Esposito</title>
    <meta property="og:title" content="Mauro Esposito" />
    <meta name="twitter:title" content="Mauro Esposito" />

    <?php endif; ?>
</head>