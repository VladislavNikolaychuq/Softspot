<?php
get_header();


$image_blog = get_field('image_blog');
$get_permalink = get_permalink();
$description_posts = get_field('description_posts');
$title = get_the_title();
$twitter_link_site=get_field('twitter_link_site');
$date = get_the_date('M d,Y');



?>
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

        </div>

    </div>

    <span id="hamburger">
                <span></span>
            </span>

</header>

<div id="site__wrap" data-action="<?php echo admin_url( 'admin-ajax.php' ); ?>">


        <!-- page-head -->
        <div id="page-head">
            <a href="<?= get_permalink(82)?>" id="page-head__back">Back to blog</a>

            <?php get_template_part ('components/content','social-links');?>
        <!-- /page-head -->

            <div id="site__content">

                <div id="post">

                    <div id="post__head">

                        <div id="post__info">
                            <time id="post__date" datetime="2019-03-04"><?=$date ?></time>


                        </div>

                        <h1 id="post__title"><?= $title?></h1>

                        <a href="https://twitter.com/softspotapp" class="twttr">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 49.3 40" style="enable-background:new 0 0 49.3 40;" xml:space="preserve">
                                            <path d="M49.3,4.7c-1.8,0.8-3.8,1.3-5.8,1.6c2.1-1.2,3.7-3.2,4.4-5.6c-2,1.2-4.1,2-6.4,2.5C39.6,1.2,37,0,34.1,0
                                                C28.5,0,24,4.5,24,10.1c0,0.8,0.1,1.6,0.3,2.3C15.9,12,8.4,8,3.4,1.8C2.6,3.3,2.1,5.1,2.1,6.9c0,3.5,1.8,6.6,4.5,8.4
                                                c-1.7-0.1-3.2-0.5-4.6-1.3c0,0,0,0.1,0,0.1c0,4.9,3.5,9,8.1,9.9c-0.8,0.2-1.7,0.4-2.7,0.4c-0.7,0-1.3-0.1-1.9-0.2c1.3,4,5,6.9,9.4,7
                                                c-3.5,2.7-7.8,4.3-12.6,4.3c-0.8,0-1.6,0-2.4-0.1C4.5,38.4,9.8,40,15.5,40c18.6,0,28.8-15.4,28.8-28.8c0-0.4,0-0.9,0-1.3
                                                C46.2,8.5,47.9,6.8,49.3,4.7z"></path>
                                        </svg>
                            Follow @softspotapp
                        </a>

                    </div>

                    <div id="post__thumb">

                        <p><img src="<?=$image_blog ?>" alt="Keeping Your Pet Safe From Rattlesnake Bites"></p>

                    </div>

                    <article id="article">
                        <?=$text_about = get_field('text_about');?>
                        <p></p>
                        <div class="heateorFfcClear"></div><div style="width:100%;text-align:left;" class="heateor_ffc_facebook_comments"><h4 class="heateor_ffc_facebook_comments_title" style="padding:10px;font-family:Arial,Helvetica Neue,Helvetica,sans-serif;">Facebook Comments</h4><script type="text/javascript">!function(e,n,t){var o,c=e.getElementsByTagName(n)[0];e.getElementById(t)||(o=e.createElement(n),o.id=t,o.src="//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2",c.parentNode.insertBefore(o,c))}(document,"script","facebook-jssdk");</script><div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop" data-href="https://softspotapp.com/keeping-your-pet-safe-from-rattlesnake-bites/" data-colorscheme="light" data-numposts="" data-width="100%" data-order-by="social" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;color_scheme=light&amp;container_width=568&amp;height=100&amp;href=https%3A%2F%2Fsoftspotapp.com%2Fkeeping-your-pet-safe-from-rattlesnake-bites%2F&amp;locale=en_US&amp;order_by=social&amp;sdk=joey&amp;version=v3.2" style="width: 100%;"><span style="vertical-align: bottom; width: 100%; height: 179px;"><iframe name="f35ea3b7f100094" width="1000px" height="100px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:comments Facebook Social Plugin" src="https://www.facebook.com/v3.2/plugins/comments.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2Fvy-MhgbfL4v.js%3Fversion%3D44%23cb%3Df11749f87168d84%26domain%3Dsoftspotapp.com%26origin%3Dhttps%253A%252F%252Fsoftspotapp.com%252Ff29e82adee62e98%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=568&amp;height=100&amp;href=https%3A%2F%2Fsoftspotapp.com%2Fkeeping-your-pet-safe-from-rattlesnake-bites%2F&amp;locale=en_US&amp;order_by=social&amp;sdk=joey&amp;version=v3.2" style="border: none; visibility: visible; width: 100%; height: 179px;" class=""></iframe></span></div></div><div class="heateorFfcClear"></div>
                    </article>

                    <div style="" class="heateor_ffc_facebook_comments"><style type="text/css">.fb-comments,.fb-comments span,.fb-comments span iframe[style]{min-width:100%!important;width:100%!important}</style><script type="text/javascript">!function(e,n,t){var o,c=e.getElementsByTagName(n)[0];e.getElementById(t)||(o=e.createElement(n),o.id=t,o.src="//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2",c.parentNode.insertBefore(o,c))}(document,"script","facebook-jssdk");</script><div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop" data-href="https://softspotapp.com/keeping-your-pet-safe-from-rattlesnake-bites/" data-numposts="" data-colorscheme="light" data-order-by="social" data-width="100%" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;color_scheme=light&amp;container_width=654&amp;height=100&amp;href=https%3A%2F%2Fsoftspotapp.com%2Fkeeping-your-pet-safe-from-rattlesnake-bites%2F&amp;locale=en_US&amp;order_by=social&amp;sdk=joey&amp;version=v3.2" style="width: 100%;"><span style="vertical-align: bottom; width: 100%; height: 179px;"><iframe name="f3e31408a585f58" width="1000px" height="100px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:comments Facebook Social Plugin" src="https://www.facebook.com/v3.2/plugins/comments.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2Fvy-MhgbfL4v.js%3Fversion%3D44%23cb%3Dfef749d4d3fedc%26domain%3Dsoftspotapp.com%26origin%3Dhttps%253A%252F%252Fsoftspotapp.com%252Ff29e82adee62e98%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=654&amp;height=100&amp;href=https%3A%2F%2Fsoftspotapp.com%2Fkeeping-your-pet-safe-from-rattlesnake-bites%2F&amp;locale=en_US&amp;order_by=social&amp;sdk=joey&amp;version=v3.2" style="border: none; visibility: visible; width: 100%; height: 179px;" class=""></iframe></span></div></div>
                </div>






                <div id="post-navigation" data-action="<?php echo admin_url( 'admin-ajax.php' ); ?>">
<?php
                    $allEpisodesIDs=getAllEpisodes();
                    $currentID= get_the_ID();
                    $prevPage=null;
                    $nextPage=null;

            for ($i = 0; $i < count($allEpisodesIDs); $i++) {

                if($currentID==$allEpisodesIDs[$i]) {

                    $prevPage=$allEpisodesIDs[$i-1];

                    $nextPage=$allEpisodesIDs[$i+1];
                }
            }
                    ?>



                    <?php if(!is_null($nextPage)):?>
                    <a href="<?= get_the_permalink($nextPage) ?>" data-id="<?= $nextPage ?>" title="<?=get_the_title($nextPage)?>">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 68 44.3" style="enable-background:new 0 0 68 44.3;" xml:space="preserve">
                <polyline points="41.5,3 65,22.6 42.4,41.3 "></polyline>
                <line x1="65" y1="22.6" x2="2.5" y2="22.6"></line>
            </svg>
            <span>Next</span>
        </span>


                    </a>
                    <?php endif; ?>

            <?php if(!is_null($prevPage)):?>
            <a href="<?= get_the_permalink($prevPage) ?>" data-id="<?= $prevPage ?>" title="<?=get_the_title($prevPage)?>">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 68 44.3" style="enable-background:new 0 0 68 44.3;" xml:space="preserve">
                <polyline points="41.5,3 65,22.6 42.4,41.3 "></polyline>
                <line x1="65" y1="22.6" x2="2.5" y2="22.6"></line>
            </svg>
            <span>Previous</span>
        </span>

            </a>
            <?php endif; ?>
        </div>

</div>

        <!-- site__aside -->
        <aside id="site__aside">

            <div id="fb-widget">

                <script>
                    (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.async=true;
                        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=395202813876688";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>

                <div class="fb-page" data-animclass="fadeIn " data-href="https://www.facebook.com/softspotvet" data-hide-cover=false data-width="260" data-height="" data-show-facepile=false  data-show-posts=false data-adapt-container-width=false data-hide-cta=false data-small-header="false"></div>

            </div>

            <!-- search -->
            <div id="search">

                <!-- search__form -->
                <div id="search__form">

                    <input type="text" placeholder="Search" />
                    <button type="submit" id="search__btn-find">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 62.2 60.2" style="enable-background:new 0 0 62.2 60.2;" xml:space="preserve">
                                <g>
                                    <circle cx="29" cy="29" r="26"/>
                                    <line x1="49" y1="47" x2="59.2" y2="57.2"/>
                                </g>
                            </svg>
                    </button>

                </div>
                <!-- /search__form -->

                <!-- search__popup -->
                <div id="search__popup">
                    <div id="search__popup-scroll-wrap">
                        <div id="search__result"></div>
                    </div>
                    <div id="search__preloader">
                        <div class="loader">
                            <div class="loader__wrap"></div>
                        </div>
                    </div>
                    <div id="search__empty">
                        Nothing Found :(
                    </div>
                </div>
                <!-- /search__popup -->

            </div>
            <!-- /search -->

            <!-- top-articles -->
            <section class="aside-section">

                <h3 class="aside-section__topic">Recent posts</h3>

                <div class="aside-section__list">
                    <a href="#" class="aside-section__item">Should I Shave My Long-Haired Dog When It Gets Hot?</a>
                    <a href="#" class="aside-section__item">8 Times To Use A Mobile Vet Instead Of Going To A Clinic</a>
                    <a href="#" class="aside-section__item">4 Arizona Dog Laws That Every Dog Owner Should Know About</a>
                </div>

            </section>
            <!-- /top-articles -->

        </aside>
        <!-- s/ite__aside -->

        <a href="#" id="to-top">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 68 44.3" style="enable-background:new 0 0 68 44.3;" xml:space="preserve">
                    <polyline class="st0" points="41.5,3 65,22.6 42.4,41.3 "/>
                <line class="st1" x1="65" y1="22.6" x2="2.5" y2="22.6"/>
            </svg>
        </a>

    </div>

<?php
get_footer()
?>
