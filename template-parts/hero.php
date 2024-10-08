<?php

$hero = get_field('az_hero');
$lockup = $hero['lockup'];
$content = $hero['content'];
$bg_image = $hero['bg_image'];

?>

<section class="az-hero az-grid az-col-2 position-relative">

  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/theme/css/template-css/hero.css">
  
  <?php if($bg_image): ?>
    <div class="az-hero__background az-grid-cover">
      <?= wp_get_attachment_image( $bg_image['ID'], null, null, array(
        'class' => 'az-object-fit'
      )); ?>
    </div>
  <?php endif; ?>

  <div class="az-hero__text d-flex flex-column justify-content-between align-items-center az-grid-cover">
    <?php if($lockup): ?>
      <div class="az-hero__lockup">
        <?= wp_get_attachment_image($lockup['ID'], 'medium'); ?>
      </div>
    <?php endif; ?>
  
    <?php if($content): ?>
      <div class="az-hero__content">
        <?= $content; ?>
      </div>
    <?php endif; ?>
  </div>

</section>