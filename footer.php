</section>

<footer>
  
    <div class="container">
      <div class="row footer-stuff">
        <div class="columns three bits">
        <?php dynamic_sidebar('footer1') ?>
        </div>
        <div class="columns three bits">
          <?php dynamic_sidebar('footer2') ?>
        </div>
        <div class="columns three bits">
          <?php dynamic_sidebar('footer3') ?>
        </div>
        <div class="columns three bits">
          <?php dynamic_sidebar('footer4') ?>
        </div>
      </div>
    </div>


    <p id="info"><?php bloginfo('name'); ?> - &copy; <?php echo date('Y');?></p>

	</footer>

<?php wp_footer(); ?>


</body>
