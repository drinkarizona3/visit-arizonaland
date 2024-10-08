<?php b4st_footer_before();?>

<footer id="site-footer">

  <div class="container">

    <?php if(is_active_sidebar('footer-widget-area')): ?>
    <div class="row pt-5 mb-4 border-bottom border-dark" id="footer" role="navigation">
      <?php dynamic_sidebar('footer-widget-area'); ?>
    </div>
    <?php endif; ?>

    <?php b4st_bottomline();?>

  </div>

</footer>

<?php b4st_footer_after();?>

<?php wp_footer(); ?>
</body>
</html>
