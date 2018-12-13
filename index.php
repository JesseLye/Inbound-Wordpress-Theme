<?php get_header(); ?>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

 <article class="blog">
    <div class="container">
      <div class="eight columns" id="nudge">
<?php
if (have_posts()) :
  while (have_posts()) : the_post(); ?>

        <?php the_post_thumbnail('first-thumbnail'); ?>
        <!--<img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=blog&w=600&h=600" alt="little"/>-->
          <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <p class="post-info"><?php the_time('F jS, Y'); ?> | Posted in

            <?php

            $categories = get_the_category();
            $separator = ", ";
            $output = '';

            if ($categories) {
              foreach ($categories as $category) {

                $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;

              }
                 echo trim ($output, $separator);
            }

            ?>
            | by
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> 

             </p>
            <p id="cya">
             <?php echo get_the_excerpt(); ?>
             </p>
                <a href="<?php the_permalink(); ?>" class="button last">READ MORE</a>

  
  <?php endwhile; ?>

<!-- new shit here -->

  <?php   

  else :
    echo '<p>No content found</p>';
  
   endif;
?>

  <div class="tweleve columns" id="non">
        <div class="six columns" id="older">
      <?php next_posts_link('← Older Posts'); ?>
    </div>

    <div class="six columns" id="newer">
      <?php previous_posts_link('Newer Posts →'); ?>
    </div>
  </div>

  </div>

  <article class="sidewidget four columns" style="margin-top: 7px;">
          <?php dynamic_sidebar('sidebar1') ?>
           </article>

    </article>
  </div>
</div>


<?php get_footer(); ?>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
