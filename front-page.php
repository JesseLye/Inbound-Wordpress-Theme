<?php get_header(); ?>


  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="featured">
    <div class="container">
      <div class="tweleve columns">
        <div id="owl-demo" class="owl-carousel" style="margin-bottom: 20px;">


            <?php
            $frontPosts = new WP_Query('posts_per_page=4');

            if ($frontPosts->have_posts()) :

              while ($frontPosts->have_posts()) : $frontPosts->the_post(); ?>
                <!-- post-item -->

                <div id="force"><a id="bannerlink" href="<?php the_permalink(); ?>"><p id="absolute"><?php the_title(); ?></a></p><?php the_post_thumbnail('slider-image'); ?></div>

              <?php endwhile;

              else :
                // fallback no content message here
            endif;
            wp_reset_postdata(); ?>




             </div>
        </div>

    <div class="row">

<?php
            $frontPosts = new WP_Query('posts_per_page=2&offset=4');

            if ($frontPosts->have_posts()) :

              while ($frontPosts->have_posts()) : $frontPosts->the_post(); ?>
                <!-- post-item -->
                <div class="six columns" style="margin-bottom: 40px;">
                 <?php the_post_thumbnail('first-thumbnail'); ?>

                  <?php

            $categories = get_the_category();
            $separator = " + ";
            $output = '';

            if ($categories) {
              foreach ($categories as $category) {

                $output .= '<a id="category" href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;

              }
                 echo trim ($output, $separator);
            }

            ?>

                  <p id="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                  <div class="cerpt">
                    <p>
                      <?php echo get_the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>">Read more &raquo;</a>
                          </p>
                      </div>
                   </div>


              <?php endwhile;

              else :
                // fallback no content message here
            endif;
            wp_reset_postdata(); ?>

</div>


    <div class="row">

<?php // opinion posts loop begins here
            $frontPosts = new WP_Query('posts_per_page=3&offset=6');

            if ($frontPosts->have_posts()) :

              while ($frontPosts->have_posts()) : $frontPosts->the_post(); ?>
                <!-- post-item -->
                <div class="four columns" style="margin-bottom: 40px;">
                 <?php the_post_thumbnail('first-thumbnail'); ?>


                      <?php

            $categories = get_the_category();
            $separator = " + ";
            $output = '';

            if ($categories) {
              foreach ($categories as $category) {

                $output .= '<a id="category" href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;

              }
                 echo trim ($output, $separator);
            }

            ?>



                  <p id="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                    <div class="cerpt">
                    <p>
                      <?php echo get_the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>">Read more &raquo;</a>
                        </p>
                      </div>
                   </div>


              <?php endwhile;

              else :
                // fallback no content message here
            endif;
            wp_reset_postdata(); ?>

</div>






<?php get_footer(); ?>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</html>
