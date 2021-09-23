<?php get_header(); ?>

	<main id="primary" class="site-main">

    <div class="container">
      <div class="boxPage" style="padding: 3rem 0;">
        <?php
          while ( have_posts() ) :
            the_post();
            the_content();
          endwhile;
        ?>
      </div>
    </div>

	</main>

<?php
get_footer();
