<?php get_header(); ?>


<h1 class="about-header"><?php the_title(); ?></h1>

<?php if (have_posts()) :
		while (have_posts()) : the_post(); ?>

		<div class="about">
			<div class="container">
				<div class="twelve columns">

		 <?php /* echo get_avatar_url(1); */?> 
		<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'about-img' ) ); ?>
		<?php the_content(); ?>

			</div>
		</div>
	</div>





<?php endwhile;
  
  else :
    echo '<p>No content found</p>';
  
  endif;
?>


<?php get_footer(); ?>
