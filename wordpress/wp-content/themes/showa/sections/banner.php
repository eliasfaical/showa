<?php
  if( have_rows('banner_principal') ) :
?>
  <section class="banner__hero">
    <div class="slide_home owl-carousel owl-theme" id="bannerHero">
      <?php
        while( have_rows('banner_principal') ) : the_row();
      ?>
        <div class="item">
          <img src="<?php the_sub_field('imagem'); ?>" alt="" class="img-fluid d-none d-md-block">
          <img src="<?php the_sub_field('imagem_mobile'); ?>" alt="" class="img-fluid d-block d-md-none">
        </div>
      <?php
        endwhile;
      ?>
    </div>
  </section>
<?php
  endif;
  reset_rows();
?>