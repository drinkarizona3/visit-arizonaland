<?php

$hero = get_field('az_hero');
$lockup = $hero['lockup'];
$content = $hero['content'];
$bg_image = $hero['bg_image'];
$slideshow_images = $hero['slideshow'];
?>

<section class="az-hero az-grid az-col-2 position-relative overflow-hidden">

  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/theme/css/template-css/hero.css">
  
  <?php if($hero['slideshow_enabled'] && $slideshow_images): ?>

    <div class="az-hero__background az-grid-cover">
      <div class="az-slideshow owl-carousel owl-default">
        <?php
          foreach ($slideshow_images as $i => $image): ?>
            <div class="az-slideshow__item">
              <picture class="az-object-fit">
                  <source class="owl-lazy" media="(min-width: 1200px)" data-srcset="<?= $image['sizes']['az-xl']; ?>" data-src-retina="<?= $image['sizes']['az-xl']; ?>" >
                  <source class="owl-lazy" media="(min-width: 768px)" data-srcset="<?= $image['sizes']['medium_large']; ?>" data-src-retina="<?= $image['sizes']['large']; ?>" >
                  <img class="owl-lazy" data-src="<?= $image['sizes']['az-small']; ?>" data-src-retina="<?= $image['sizes']['medium']; ?>" alt="<?= $image['alt']; ?>">
              </picture>
            </div> <?php
          endforeach;
        ?>
      </div>
    </div>

  <?php else: ?>

    <?php if($bg_image): ?>

      <div class="az-hero__background az-grid-cover">
        <?= wp_get_attachment_image( $bg_image['ID'], null, null, array(
          'class' => 'az-object-fit az-bg__image az-bg__custom'
        )); ?>
      </div>

    <?php else: ?>

      <div class="az-hero__background az-grid-cover">
        <?php the_post_thumbnail('az-xl', array(
          'class' => 'az-object-fit az-bg__image az-bg__featured-image'
        )); ?>
      </div>

    <?php endif; ?>

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