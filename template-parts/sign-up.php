<?php

  $az_sign_up = get_field('az_sign_up');
  $form_embed_id = $az_sign_up['form_embed_id'];
  $wave_classes = ['az-wave top', 'az-wave bottom'];
  $floater_ids = [61,56];
?>

<section class="az-sign-up" style="background-color: <?= $az_sign_up['section_color'] ?>;">

  <?php 
    foreach($wave_classes as $wave_class): ?>
      <figure class="position-absolute <?= $wave_class ?>">
        <?php get_template_part('template-parts/waves') ?>
      </figure><?php 
    endforeach; 
  ?>

  <?php    
    foreach($floater_ids as $floater_id): 
        $floater_info = az_get_image_data($floater_id);
      ?>
        <figure class="position-absolute <?= $floater_info['description'] ?>">
          <?= wp_get_attachment_image($floater_id, 'medium', array(
            'loading' => 'lazy'
          )); ?>
        </figure>
      <?php 
    endforeach; 
  ?>

  <span class="az-sign-up__headline az-font-xl"><?= $az_sign_up['headline'] ?></span>
  <?php if($form_embed_id): ?>
    <div class="az-sign-up__form">
      <div class="klaviyo-form-<?= $form_embed_id ?>"></div>
    </div>
  <?php endif; ?>
</section>