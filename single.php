<?php get_header(); ?>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <article class="blog">
    <div class="newcontainer">
      <div class="u-full-width">

<?php $completed = false; 
      $postTitle = '';
?>

<?php
if (have_posts()) :
  while (have_posts()) : the_post(); ?>
        
        
        <?php the_post_thumbnail('banner-image'); ?>
      
          <h4><?php the_title(); ?></h4>
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
             <!-- Only Unique Line of Code in this File --> <?php the_content(); ?>
      

  
  <?php endwhile;
  
  else :
    echo '<p>No content found</p>';
  
  endif;
  $completed = true;
  if ($completed == true) {
    $postTitle = get_the_title();
  }
?>

<div class="randblog">
  <p style="letter-spacing: 2px; font-size: 11px; margin: 0 auto;">You may also like</p>
    <div class="row">

<?php $posts = get_posts('orderby=rand&numberposts=3'); 

foreach($posts as $post) { ?>


<div class="four columns"><?php the_post_thumbnail('first-thumbnail'); ?><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title(); ?> </a></div> 


 <?php } wp_reset_postdata(); ?>


</div>
</div>


<!--Post Buttons-->
  
  <div class="NP">

      <div class="six columns">
        <div class="previous">
          <?php previous_post_link('
              <span>Previous</span>
              <p id="nextpost">%link</p>
              ', '← %title', false);

            ?>
        </div>
      </div>

  <div class="six columns">
    <div class="next">
      <?php next_post_link('
          <span>Next</span>
          <p id="nextpost">%link</p>
          ', '%title →', false);

        ?>
        </div>
      </div>


      </article>
    </div>
  </div>

<?php get_footer(); ?>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->


