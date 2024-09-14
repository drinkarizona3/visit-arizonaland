<?php

$hero = get_field('az_hero');
$lockup = $hero['lockup'];
$content = $hero['content'];
$bg_image = $hero['bg_image'];

?>

<section class="az-hero">

  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/theme/css/template-css/hero.css">
  
  <?php if($bg_image): ?>
    <div class="az-hero__background">
      <?= wp_get_attachment_image( $bg_image['ID'], null, null, array(
        'class' => 'az-object-fit'
      )); ?>
    </div>
  <?php endif; ?>

  <div class="az-hero__text">
    <?php if($lockup): ?>
      <?= wp_get_attachment_image($lockup['ID'], 'medium'); ?>
    <?php endif; ?>
  
    <?php if($content): ?>
      <?= $content; ?>
    <?php endif; ?>
  </div>

</section>