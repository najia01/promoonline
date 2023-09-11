</main>
<footer>

    <img id="footerLogo" src="<?php echo get_template_directory_uri() ?>./asset/img/logo.png" alt="logo promo">
    <span class="promo">PROMO 180</span>
    <div class="copyright">
        <p id="copy">Copyright&copy;2023 Najia</p>
    </div>
    <!-- pour ajouter un widget -->
    <div class="footer-span">
       
        <?php dynamic_sidebar('footer1'); ?>
    </div>


</footer>


<?php wp_enqueue_script('main', get_template_directory_uri() . '/asset/main.js');

wp_enqueue_script('lineicons', 'https://cdn.lineicons.com/2.0/LineIcons.js', array(), null, true);

wp_footer();?>


</body>

</html>