<section class="arquitetos">
  <div class="titleSection">
    <div class="container">
      <h2 class="animateTop">
        <?php the_field('titulo_arquitetos'); ?>
      </h2>
    </div>
  </div>

<?php
  if( have_rows('lista_arquitetos') ) :
?>
  <div class="box_arquitetos">
    <div class="container">
      <?php
        while( have_rows('lista_arquitetos') ) : the_row();
      ?>
        <div class="item_arquiteto animateTop">
          <figure>
            <img src="<?php the_sub_field('foto'); ?>" alt="<?php the_sub_field('nome'); ?>">
          </figure>
          <div class="text">
            <h3><?php the_sub_field('nome'); ?></h3>
            <?php the_sub_field('descricao'); ?>
          </div>
        </div>
      <?php
        endwhile;
      ?>
    </div>
  </div>
<?php
  endif;
  reset_rows();
?>

</section>