<div style="clear: both"></div></div>

<!-- start footer -->
<footer>
    <p>&copy; <?php echo date('Y',current_time('timestamp',1)); ?> <a href="<?php echo home_url('home'); ?>/">
      <?php bloginfo('name'); ?></a> - theme by <a href="http://twitter.com/bigalma_/">@BIGalma_
      </a> - <?php wp_loginout(); ?>
    </p><p>
<a href="http://jigsaw.w3.org/css-validator/check/referer">
    <img style="border:0;width:88px;height:31px"
        src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
        alt="Valid CSS!" />
</a>
</p>
</footer>
<!-- end footer -->
<?php wp_footer(); ?>
</body>
</html>