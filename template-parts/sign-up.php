<?php

  $az_sign_up = get_field('az_signup');
  $headline = $az_sign_up['headline'];
  $form_title = $az_sign_up['form_title'];
  $form_embed_id = $az_sign_up['form_embed_id'];
  $wave_classes = ['az-wave top', 'az-wave bottom'];
  $floater_ids = [61,56];
?>

<section class="az-sign-up position-relative" style="background-color: <?= $az_sign_up['section_color'] ?>;">

  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/theme/css/template-css/sign-up.css">

  <?php    
    foreach($floater_ids as $floater_id): 
        $floater_info = az_get_image_data($floater_id);
      ?>
        <figure class="az-sign-up__floater position-absolute <?= $floater_info['description'] ?>">
          <?= wp_get_attachment_image($floater_id, 'medium', array(
            'loading' => 'lazy'
          )); ?>
        </figure>
      <?php 
    endforeach; 
  ?>

  <div class="az-inner position-relative overflow-hidden az-pad">

    <?php 
      foreach($wave_classes as $wave_class): ?>
        <figure class="position-absolute <?= $wave_class ?>">
          <?php get_template_part('template-parts/waves') ?>
        </figure><?php 
      endforeach; 
    ?>

    <div class="container-xl">
      <div class="row">
        <div class="col-sm">

          <?php if ($headline): ?>
            <?= $headline ?>
          <?php endif; ?>

          <?php if ($form_title): ?>
            <p class="az-sign-up__form-title text-center text-white" style="font-weight: 500;"><?= $form_title ?></p>
          <?php endif; ?>
        
          <?php if($form_embed_id): ?>
            <div class="az-sign-up__form">
              <div class="klaviyo-form-<?= $form_embed_id ?>"></div>
            </div>
          <?php endif; ?>
          
        </div>
      </div>
    </div>

  </div>

</section>