<?php
//Template Name: Blog page

get_header();?>
<?php


$pets = getBlogPosts(1);

?>

    <div id="site__wrap" data-action="<?php echo admin_url( 'admin-ajax.php' ); ?>">

            <!-- page-head -->
            <div id="page-head">
                <h1 id="page-head__title"><?=$blog=get_field('blog')?></h1>

                <?php get_template_part ('components/content','social-links');?>
            <!-- /page-head -->

            <!-- site__content -->
            <div id="site__content">

                <main id="blog">

                    <div id="blog__wrap">

                        <div id="blog__list">

                            <?php
                            foreach ($pets->posts as $petID):
                            $image_blog = get_field('image_blog', $petID);
                            $get_permalink = get_permalink($petID);
                            $description_posts = get_field('description_posts', $petID);
                            $title = get_the_title($petID);
                            $twitter_link_site=get_field('twitter_link_site',$petID);
                            $date = get_field('date_blog',$petID)

                            ?>

                            <article class="blog__item">

                                <a href="#" class="blog__picture">
                                    <img src="<?=$image_blog?>" alt="img"/>
                                </a>

                                <div class="blog__item-wrap">



                                    <div class="blog__info">
                                        <time class="blog__date" datetime="2018-10-23"><?= get_the_date('Y-m-d')?></time>
                                        <a href="<?=$twitter_link_site?>" class="twttr">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 49.3 40" style="enable-background:new 0 0 49.3 40;" xml:space="preserve">
                                            <path d="M49.3,4.7c-1.8,0.8-3.8,1.3-5.8,1.6c2.1-1.2,3.7-3.2,4.4-5.6c-2,1.2-4.1,2-6.4,2.5C39.6,1.2,37,0,34.1,0
                                                C28.5,0,24,4.5,24,10.1c0,0.8,0.1,1.6,0.3,2.3C15.9,12,8.4,8,3.4,1.8C2.6,3.3,2.1,5.1,2.1,6.9c0,3.5,1.8,6.6,4.5,8.4
                                                c-1.7-0.1-3.2-0.5-4.6-1.3c0,0,0,0.1,0,0.1c0,4.9,3.5,9,8.1,9.9c-0.8,0.2-1.7,0.4-2.7,0.4c-0.7,0-1.3-0.1-1.9-0.2c1.3,4,5,6.9,9.4,7
                                                c-3.5,2.7-7.8,4.3-12.6,4.3c-0.8,0-1.6,0-2.4-0.1C4.5,38.4,9.8,40,15.5,40c18.6,0,28.8-15.4,28.8-28.8c0-0.4,0-0.9,0-1.3
                                                C46.2,8.5,47.9,6.8,49.3,4.7z"/>
                                        </svg>
Follow @softspotapp
</a>
                                    </div>

                                    <a href="<?=$get_permalink?>" class="blog__content">

                                        <h2 class="blog__topic"><span><?= $title?></span></h2>

                                        <div class="blog__text">

                                            <p><?= $description_posts?></p>

                                        </div>

                                    </a>

                                </div>

                            </article>
                            <?php endforeach; ?>
                        </div>

                        <div id="blog__preload">
                            <div class="loader">
                                <div class="loader__wrap"></div>
                            </div>
                        </div>

                        <div id="blog__empty">
    Nothing Found :(
                        </div>

                    </div>

                    <div id="blog__btn-wrap">
                        <a href="#" id="blog__load-more">Load more</a>
                    </div>

                </main>

            </div>
            <!-- /site__content -->

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

    </div>


    <?php get_footer()?>

</body>
</html>