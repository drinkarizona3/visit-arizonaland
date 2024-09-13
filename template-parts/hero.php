<?php

$hero = get_field('az_hero');
$lockup = $hero['lockup'];
$content = $hero['content'];
$bg_image = $hero['bg_image'];

?>

<section class="az-hero">
  
  <?php if($bg_image): ?>
    <div class="az-hero__background az-bg-cover">
      <?= wp_get_attachment_image( $bg_image['ID'], null, null, array(
        'class' => 'az-object-fit'
      )); ?>
    </div>
  <?php endif; ?>

  <?php if($lockup): ?>
    <?= wp_get_attachment_image($lockup['ID']); ?>
  <?php endif; ?>

  <?php if($content): ?>
    <?= $content; ?>
  <?php endif; ?>

</section>