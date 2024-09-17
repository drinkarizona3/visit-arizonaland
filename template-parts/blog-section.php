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
          <h2 class="text-center mb-3" style="color: var(--secondary);"><?= $headline ?></h2>
        <?php endif; ?>

        <?php if($content): ?>
          <?= $content; ?>
        <?php endif; ?>
      </div>
    </div>

  </div>

  <div class="container-xl px-0 px-md-5 mt-3">
    <div class="row no-gutters">
      <div class="col-sm">
        <?php
            $az_posts = new WP_Query(array(
              'posts_per_page' => -1,
              'order'          => 'ASC'
            ));

            // The Loop.
            if ( $az_posts->have_posts() ): ?>
              <div class="az-blog-posts owl-carousel owl-theme"> <?php

                while ( $az_posts->have_posts() ): $az_posts->the_post();

                    $az_post_data = get_field('az_post_data', $post->ID );
                    $thumbnail = get_the_post_thumbnail($post->ID, 'medium');
                    $blog_item_class = 'az-blog-post'; 
            
                    if ($az_post_data && $az_external_link): 

                        $az_external_link = $az_post_data['link'];
                        $link_target = $az_external_link['target'] ? $az_external_link['target'] : '_self';
                      ?>
                        <a href="<?= $az_external_link['url'] ?>" target="<?= $link_target ?>" class="<?= $blog_item_class ?>">
                          <?= $thumbnail ?>
                        </a> 
                      <?php 
                      
                    else: 
                      
                      ?>
                        <div class="az-blog-post" class="<?= $blog_item_class ?>">
                          <?= $thumbnail ?>
                        </div> 
                      <?php

                    endif; 

                endwhile; ?>

              </div> <?php

            endif; 

            wp_reset_postdata();
          ?>
      </div>
    </div>
  </div>

</section>