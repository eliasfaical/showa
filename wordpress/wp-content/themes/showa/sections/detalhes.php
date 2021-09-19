<section class="detalhesProjeto">
  <div class="container-detalhes">
      <div class="col-descricao">
        <div class="boxDescricao">
          <div class="animateTop">
            <?php the_field('texto_destaque_detalhes'); ?>
          </div>
        </div>

        <div class="iconeLogo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon.png" alt="" class="img-fluid">
        </div>
      </div>
      
      <div class="col-items">
        <div class="boxItems">
          <?php
            if( have_rows('items_detalhes') ) :
              while( have_rows('items_detalhes') ) : the_row();
          ?>
            <div class="itemDescricao animateTop">
              <h4><?php the_sub_field('titulo'); ?></h4>
              <?php the_sub_field('lista_detalhes'); ?>
            </div>
          <?php
            endwhile;
            endif;
            reset_rows();
          ?>
        </div>
      </div>
  </div>
</section>