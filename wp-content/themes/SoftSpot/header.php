
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="robots" content="noindex, nofollow">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">

    <title>Soft-Spot</title>

    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <?php wp_head()?>
    <style>
        #preload{position:fixed;top:0;left:0;display:-ms-flexbox;display:flex;-ms-flex-pack:center;justify-content:center;-ms-flex-align:center;align-items:center;width:100%;height:100%;z-index:10;opacity:1;visibility:visible;background-color:#e6f4f7;pointer-events:none;transition:opacity .4s ease, visibility .4s ease, background-color .3s ease}#preload__loading-line{position:absolute;top:0;left:0;width:0;height:4px;background-color:#ff6461;animation:loading 4s ease;animation-fill-mode:forwards}#preload__loading-line.load{animation:none;transition:width .2s ease;width:100%}#preload__wrap{width:30%;min-width:250px}#preload__wrap svg{width:100%}#preload.preload_loaded{opacity:0;visibility:hidden}@keyframes loading{30%{width:30%}55%{width:50%}100%{width:75%}}
    </style>


</head>
<body>

<!-- site -->
<div id="site">

    <!-- site-header -->
    <header id="site-header" class="is-loading">

        <h1 id="logo">
            <img src="<?= DIRECT ?>img/logo-soft-spot.svg" alt="Soft-Spot"/>
        </h1>

        <div id="site-header__mobile-wrap">

            <div id="site-header__mobile-layout">

                <div id="site-header__sign-up">
                    <p>sign up as</p>

                    <div>
                        <a href="#"><span>Pet Parent</span></a>
                        <a href="#"><span>Vet</span></a>
                    </div>

                </div>

                <div id="site-header__wrap">

                    <a href="tel:8801588855" id="site-header__phone">(880) 158-8845</a>

                    <nav id="menu">
                        <ul>
                            <li><a href="<?= get_permalink(HOME)?>" class="anchor">Pricing</a></li>
                            <li><a href="<?= get_permalink(BLOG)?>" target="_blank" rel="nofollow">Blog</a></li>
                        </ul>
                    </nav>

                </div>

            </div>

        </div>

        <span id="hamburger">
                <span></span>
            </span>

    </header>
    <!-- /site__header -->

