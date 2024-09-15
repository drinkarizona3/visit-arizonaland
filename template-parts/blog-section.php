<?php

  $blog_section = get_field('az_blog_section');
  $headline = $blog_section['headline'];
  $content = $blog_section['content'];

?>

<section class="az-blog-section" style="background-color: <?= $blog_section['background_color']; ?>">

  <?php if($headline): ?>
    <h2><?= $headline ?></h2>
  <?php endif; ?>

  <?php if($content): ?>
    <?= $content; ?>
  <?php endif; ?>

  <?php
    $az_posts = new WP_Query(array(
      'posts_per_page' => -1
    ));

    // The Loop.
    if ( $az_posts->have_posts() ): ?>
      <div class="az-blog-posts" data-flickity='{ "wrapAround": true }'> <?php

        while ( $az_posts->have_posts() ): $az_posts->the_post();

          ?>

            <div class="az-blog-posts">

              <?php the_post_thumbnail('medium'); ?>

            </div>
          
          <?php
        endwhile; ?>

      </div> <?php
    endif; 

    wp_reset_postdata();
  ?>

</section>