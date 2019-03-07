
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
<<<<<<< HEAD
    <header id="site-header">

        <a href="https://softspotapp.com" id="logo">
            <img src="https://softspotapp.com/wp-content/themes/soft-spot/assets/dist/img/logo-soft-spot.svg" alt="Soft-Spot">
        </a>

        <div id="site-header__mobile-wrap">

            <div id="site-header__mobile-layout">

                <div id="site-header__sign-up">
                    <p>sign up as</p>

                    <div>
                        <a href="#" class="popup__open" data-popup="subscribe"><span>Pet Parent</span></a>
                        <a href="#" class="popup__open" data-popup="subscribe"><span>Vet</span></a>
                    </div>

                </div>

                <div id="site-header__wrap">

                    <a href="tel:8665852579" id="site-header__phone">(866) 585-2579</a>

                    <nav id="menu">
                        <ul>


                            <li>

                                <a href="<?= get_permalink(HOME)?>">Home</a>


                            </li>


                            <li class="is-active">

                                <a href="<?= get_permalink(BLOG)?>">Blog</a>

                                <div class="menu__cat"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.76 22.2">
                                        <path d="M3.09,15.5a11.72,11.72,0,0,0,1.6,6.4.86.86,0,0,0,.6.3h0c.1,0,.2-.1.3-.1a21.65,21.65,0,0,0,3.8-4c.4.1.9.1,1.6.2h2.7a20.9,20.9,0,0,0,2.5-.1,5.21,5.21,0,0,0,1.4-.2,21.33,21.33,0,0,0,3.8,4,.52.52,0,0,0,.4.2c.2,0,.3-.1.4-.3a11.94,11.94,0,0,0,1.6-6.4c3.4-5.9,3.1-10.1,2.8-14.5V.5A.56.56,0,0,0,26,0h0a.56.56,0,0,0-.5.6v.6c.3,4.4.6,8.2-2.7,13.9a.37.37,0,0,0-.1.3,12.57,12.57,0,0,1-1.1,5.3,18.48,18.48,0,0,1-3.3-3.5.78.78,0,0,0-.7-.3,4.23,4.23,0,0,1-1.6.2,19.27,19.27,0,0,1-2.4.1H11a5.42,5.42,0,0,1-1.7-.2.52.52,0,0,0-.7.3,17,17,0,0,1-3.2,3.5,12.78,12.78,0,0,1-1.2-5.2.76.76,0,0,0-.1-.4C.39,8.6.89,5,1.49.8a.6.6,0,0,0-.1-.4A.52.52,0,0,0,1,.2a.6.6,0,0,0-.4.1.52.52,0,0,0-.2.4C-.31,5.4-.41,9.1,3.09,15.5Z"></path>
                                        <path d="M12.39,12.1a.76.76,0,0,0,.4-.2,4.35,4.35,0,0,1,.6-.7l.7.7a.52.52,0,0,0,.4.2c.2,0,.3,0,.4-.1a.52.52,0,0,0,.2-.4c0-.2,0-.3-.1-.4a3.18,3.18,0,0,0-1-1V9.3c.1-.2.1-.3.2-.5a3,3,0,0,1,.4-.8.6.6,0,0,0,.1-.4.76.76,0,0,0-.2-.4.37.37,0,0,0-.3-.1c-.2,0-.3.1-.5.2a2.19,2.19,0,0,1-.3.5c-.1-.2-.2-.3-.3-.5a.66.66,0,0,0-.7-.2.72.72,0,0,0-.2.8.76.76,0,0,1,.2.4,3.51,3.51,0,0,0,.5.8V10a6.47,6.47,0,0,0-.8.9l-.1.2a.64.64,0,0,0,0,.6C12,12.1,12.19,12.2,12.39,12.1Z"></path>
                                    </svg>
                                    <span class="menu__cat-eye-left"></span>
                                    <span class="menu__cat-eye-right"></span>
                                </div>
                            </li>


                        </ul>
                    </nav>
                </div>

=======
<header id="site-header">

    <a href="https://softspotapp.com" id="logo">
        <img src="https://softspotapp.com/wp-content/themes/soft-spot/assets/dist/img/logo-soft-spot.svg" alt="Soft-Spot">
    </a>

    <div id="site-header__mobile-wrap">

        <div id="site-header__mobile-layout">

            <div id="site-header__sign-up">
                <p>sign up as</p>

                <div>
                    <a href="#" class="popup__open" data-popup="subscribe"><span>Pet Parent</span></a>
                    <a href="#" class="popup__open" data-popup="subscribe"><span>Vet</span></a>
                </div>

            </div>

            <div id="site-header__wrap">

                <a href="tel:8665852579" id="site-header__phone">(866) 585-2579</a>

                <nav id="menu">
                    <ul>


                        <li>

                            <a href="<?= get_permalink(6)?>">Home</a>


                        </li>


                        <li class="is-active">

                            <a href="<?= get_permalink(82)?>">Blog</a>

                            <div class="menu__cat"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.76 22.2">
                                    <path d="M3.09,15.5a11.72,11.72,0,0,0,1.6,6.4.86.86,0,0,0,.6.3h0c.1,0,.2-.1.3-.1a21.65,21.65,0,0,0,3.8-4c.4.1.9.1,1.6.2h2.7a20.9,20.9,0,0,0,2.5-.1,5.21,5.21,0,0,0,1.4-.2,21.33,21.33,0,0,0,3.8,4,.52.52,0,0,0,.4.2c.2,0,.3-.1.4-.3a11.94,11.94,0,0,0,1.6-6.4c3.4-5.9,3.1-10.1,2.8-14.5V.5A.56.56,0,0,0,26,0h0a.56.56,0,0,0-.5.6v.6c.3,4.4.6,8.2-2.7,13.9a.37.37,0,0,0-.1.3,12.57,12.57,0,0,1-1.1,5.3,18.48,18.48,0,0,1-3.3-3.5.78.78,0,0,0-.7-.3,4.23,4.23,0,0,1-1.6.2,19.27,19.27,0,0,1-2.4.1H11a5.42,5.42,0,0,1-1.7-.2.52.52,0,0,0-.7.3,17,17,0,0,1-3.2,3.5,12.78,12.78,0,0,1-1.2-5.2.76.76,0,0,0-.1-.4C.39,8.6.89,5,1.49.8a.6.6,0,0,0-.1-.4A.52.52,0,0,0,1,.2a.6.6,0,0,0-.4.1.52.52,0,0,0-.2.4C-.31,5.4-.41,9.1,3.09,15.5Z"></path>
                                    <path d="M12.39,12.1a.76.76,0,0,0,.4-.2,4.35,4.35,0,0,1,.6-.7l.7.7a.52.52,0,0,0,.4.2c.2,0,.3,0,.4-.1a.52.52,0,0,0,.2-.4c0-.2,0-.3-.1-.4a3.18,3.18,0,0,0-1-1V9.3c.1-.2.1-.3.2-.5a3,3,0,0,1,.4-.8.6.6,0,0,0,.1-.4.76.76,0,0,0-.2-.4.37.37,0,0,0-.3-.1c-.2,0-.3.1-.5.2a2.19,2.19,0,0,1-.3.5c-.1-.2-.2-.3-.3-.5a.66.66,0,0,0-.7-.2.72.72,0,0,0-.2.8.76.76,0,0,1,.2.4,3.51,3.51,0,0,0,.5.8V10a6.47,6.47,0,0,0-.8.9l-.1.2a.64.64,0,0,0,0,.6C12,12.1,12.19,12.2,12.39,12.1Z"></path>
                                </svg>
                                <span class="menu__cat-eye-left"></span>
                                <span class="menu__cat-eye-right"></span>
                            </div>
                        </li>


                    </ul>
                </nav>
>>>>>>> BlogPage
            </div>

        </div>

<<<<<<< HEAD
        <span id="hamburger">
                <span></span>
            </span>

    </header>
</body>
</html>
=======
    </div>

    <span id="hamburger">
                <span></span>
            </span>

</header>
>>>>>>> BlogPage
