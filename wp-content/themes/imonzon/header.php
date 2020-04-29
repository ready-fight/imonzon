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
            <div class="nav-item"><input type="text" placeholder="Search"></div>
            <div class="nav-item"><a href="<?= get_site_url() ?>/cart"><i class="fas fa-shopping-cart"></i>
            (<span id="shopping-cart-count">0</span>)<span> Cart | Checkout</span></a></div>
        </div>
        <div class="area-01">
            <div class="menu">
                <ul class="menu-list">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">CONTACT US</a></li>
                    <li><a href="#">Barro-Clay-Cemt</a></li>
                    <li><a href="#">Crowns-Coronas</a></li>
                    <li><a href="#">Cuentas-Beaded</a></li>
                    <li><a href="#">Esentincal</a></li>
                    <li><a href="#">Herramientas-Tools</a></li>
                    <li><a href="#">Hierro-Iron</a></li>
                    <li><a href="#">Madera-Wood</a></li>
                    <li><a href="#">Metal</a></li>
                    <li><a href="#">Pilon/Bateas/Lebrillos</a></li>
                    <li><a href="#">Images</a></li>
                    <li><a href="#">Sopera</a></li>
                    <li><a href="#">MISC</a></li>
                    <li><a href="#">Resources/Informacion</a></li>
                </ul>
            </div>