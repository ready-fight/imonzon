<?php $basename = basename($_SERVER['REQUEST_URI']) ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= get_bloginfo() ?></title>
    <link rel="icon" href="<?= get_template_directory_uri(); ?>/favicon.ico" type="image/gif" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
</head>

<body>
    <?php echo do_shortcode('[show_wp_shopping_cart]') ?>
    <div class="container">
        <div class="banner">
            <div class="rooster"><img src="<?= get_template_directory_uri() ?>/images/home/rooster.jpg" alt=""></div>
            <div class="heart"><img src="<?= get_template_directory_uri() ?>/images/home/heart.jpg" alt=""></div>
            <div class="banner-phrase">
                <p class="lead">CREADO CON FE<br>
                    CREATED WITH FAITH</p>
                <br>
                <p>ALMACEN DE BOTANICA MAYORISTA<br>
                    BOTANICA PRODUCTS WHOLESALE</p>
                <p>
                    OFFICIAL WEBSITE OF MONZON<br>
                    WE ARE LOCATED IN HIALEAH, FLORIDA<br>
                    IN HEART OF THE SANTERIA COMMUNITY</p>
            </div>
        </div>
        <div class="flex">
            <div class="nav-item"><input type="text" placeholder="Search">
                <div class="search-btn"><i class="fas fa-search"></i></div>
            </div>
            <div class="nav-item"><a href="<?= get_site_url() ?>/cart"><i class="fas fa-shopping-cart"></i>
                    (<span id="shopping-cart-count">0</span>)<span> Cart | Checkout</span></a></div>
        </div>
        <div class="area-01">
            <div class="menu">
                <ul class="menu-list">
                    <li><a class="<?php if ($basename == 'imonzon') echo 'active' ?>" href="<?= get_site_url() ?>">HOME</a></li>
                    <li><a class="<?php if ($basename == 'contact-us') echo 'active' ?>" href="<?= get_site_url() ?>/contact-us">CONTACT US</a></li>
                    <li><a class="<?php if ($basename == 'barro-clay-cemt') echo 'active' ?>" href="<?= get_site_url() ?>/barro-clay-cemt">Barro-Clay-Cemt</a></li>
                    <li><a class="<?php if ($basename == 'crowns-coronas') echo 'active' ?>" href="<?= get_site_url() ?>/crowns-coronas">Crowns-Coronas</a></li>
                    <li><a class="<?php if ($basename == 'cuentas-beaded') echo 'active' ?>" href="<?= get_site_url() ?>/cuentas-beaded">Cuentas-Beaded</a></li>
                    <li><a class="<?php if ($basename == 'esentincal') echo 'active' ?>" href="<?= get_site_url() ?>/esentincal">Esentincal</a></li>
                    <li><a class="<?php if ($basename == 'herramientas-tools') echo 'active' ?>" href="<?= get_site_url() ?>/herramientas-tools">Herramientas-Tools</a></li>
                    <li><a class="<?php if ($basename == 'hierro-iron') echo 'active' ?>" href="<?= get_site_url() ?>/hierro-iron">Hierro-Iron</a></li>
                    <li><a class="<?php if ($basename == 'madera-wood') echo 'active' ?>" href="<?= get_site_url() ?>/madera-wood">Madera-Wood</a></li>
                    <li><a class="<?php if ($basename == 'metal') echo 'active' ?>" href="<?= get_site_url() ?>/metal">Metal</a></li>
                    <li><a class="<?php if ($basename == 'pilon-bateas-lebrillos') echo 'active' ?>" href="<?= get_site_url() ?>/pilon-bateas-lebrillos">Pilon/Bateas/Lebrillos</a></li>
                    <li><a class="<?php if ($basename == 'images') echo 'active' ?>" href="<?= get_site_url() ?>/images">Images</a></li>
                    <li><a class="<?php if ($basename == 'sopera') echo 'active' ?>" href="<?= get_site_url() ?>/sopera">Sopera</a></li>
                    <li><a class="<?php if ($basename == 'misc') echo 'active' ?>" href="<?= get_site_url() ?>/misc">MISC</a></li>
                    <li><a class="<?php if ($basename == 'resources') echo 'active' ?>" href="<?= get_site_url() ?>/resources">Resources/Informacion</a></li>
                </ul>
            </div>