<?php
  get_header(); 
  b4st_main_before();

  /* Template Name: AriZonaLand Home */
?>


<main id="site-main" class="position-relative overflow-hidden">

  <?php get_template_part('template-parts/hero'); ?>

  <?php get_template_part('template-parts/sign-up'); ?>
  
  <?php get_template_part('template-parts/blog-section'); ?>

</main>

<?php 
  b4st_main_after();
  get_footer(); 
?>
