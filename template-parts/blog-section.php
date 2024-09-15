<?php

  $blog_section = get_field('az_blog_section');
  $headline = $blog_section['headline'];
  $content = $blog_section['content'];

?>

<section class="az-blog-section az-pad" style="background-color: <?= $blog_section['background_color']; ?>">

  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/theme/css/template-css/blog-section.css">

  <div class="container-xl">

    <div class="row">

      <div class="col-sm">
        <?php if($headline): ?>
          <h2 class="text-center" style="color: var(--secondary);"><?= $headline ?></h2>
        <?php endif; ?>

        <?php if($content): ?>
          <?= $content; ?>
        <?php endif; ?>

        <?php
          $az_posts = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => -1
          ));

          // The Loop.
          if ( $az_posts->have_posts() ): ?>
            <div class="az-blog-posts" data-flickity='{ "wrapAround": true }'> <?php

              while ( $az_posts->have_posts() ): $az_posts->the_post();

                ?>

                  <div class="az-blog-post">

                    <?php the_post_thumbnail('medium', array(
                      'class' => 'az-object-fit'
                    )); ?>

                  </div>
                
                <?php
              endwhile; ?>

            </div> <?php
          endif; 

          wp_reset_postdata();
        ?>
      </div>

    </div>
  </div>

</section>