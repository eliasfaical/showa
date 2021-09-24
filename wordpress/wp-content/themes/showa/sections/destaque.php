<section class="destaqueShowa" id="sobre-nos">
  <div class="container-destaque">
    <div class="boxText_destaque">
      <div class="animateTop">
        <?php
          while(have_posts()) {
            the_post();
            the_content();
          }
        ?>
      </div>
    </div>

    <div class="img_Destaque">
      <img src="<?php the_post_thumbnail_url(); ?>" alt="Showa" class="img-fluid">
    </div>
  </div>
</section>