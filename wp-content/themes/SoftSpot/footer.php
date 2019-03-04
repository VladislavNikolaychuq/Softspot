</footer>
<!-- /sign-up -->

<!-- site__footer -->
<footer id="site__footer">
    <p>© 2018 SoftSpot. Pet care</p>

    <div id="footer-menu">
        <a href="#app-promo" class="anchor">Download app</a>
        <a href="#services" class="anchor">Pricing</a>
    </div>

</footer>
<!-- /site__footer -->

</div>
<!-- /site -->

<!-- popup -->
<div id="popup" class="is-loading">

    <!-- popup__wrap -->
    <div id="popup__wrap">

        <!-- popup__content -->
        <section class="popup__content popup__subscribe popup_subscribe">

            <div class="popup__content-subscribe">

                <div class="popup__content-text">
                    <h3>Subscribe</h3>
                    <p>We're still building! Subscribe to get updates and offers for when we launch!</p>
                </div>

                <form class="popup__subscribe-form" novalidate>
                    <input type="email" placeholder="email address" required>
                    <button type="submit" class="btn btn_color-2"><span>subscribe</span></button>
                </form>

                <div class="loader">
                    <div class="loader__wrap"></div>
                </div>

            </div>

            <div class="popup__content-thanks">

                <div class="popup__content-text">
                    <h3>Thank you.</h3>
                    <p>We’ll reach out to you shortly.</p>
                </div>

            </div>

            <span class="popup__close"></span>

        </section>
        <!-- /popup__content -->

    </div>
    <!-- /popup__wrap -->

</div>
<!-- /popup -->

<script src="js/vendors/jquery-3.3.1.min.js"></script>
<script src="js/common.min.js"></script>

<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script>
<script type="text/javascript">
    window.dojoRequire(["mojo/signup-forms/Loader"], function(L) {
        L.start({"baseUrl":"mc.us18.list-manage.com","uuid":"ec0afb756aedf79132593cfff","lid":"82f3380086","uniqueMethods":true}) })
</script>

</body>
</html>
<?wp_footer();?>