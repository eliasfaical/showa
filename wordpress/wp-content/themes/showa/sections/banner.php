<?php
  if( have_rows('banner_principal') ) :
?>
  <section class="banner__hero">
    <div class="slide_home">
      <?php
        while( have_rows('banner_principal') ) : the_row();
      ?>
        <div>
          <img src="<?php the_sub_field('imagem'); ?>" alt="" class="img-fluid">
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