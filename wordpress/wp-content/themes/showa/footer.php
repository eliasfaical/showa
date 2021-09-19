
	<footer id="colophon" class="site-footer">
    <div class="boxFooter">
      <div class="container d-flex flex-sm-row flex-column justify-content-between align-items-center">
        <a href="#" class="btn-default" class="Estante de vendas">
          Estante de vendas
        </a>

        <ul class="socialIcons">
          <?php
            if( have_rows('redes_sociais', 'option') ) :
              while( have_rows('redes_sociais', 'option') ) : the_row();
          ?>
            <li>
              <a href="<?php the_sub_field('url', 'option'); ?>" title="<?php the_sub_field('titulo', 'option'); ?>">
                <?php the_sub_field('icone', 'option'); ?>
              </a>
            </li>
          <?php
            endwhile;
            endif;
            reset_rows();
          ?>
        </ul>
      </div>

      <div class="container parceiros">
        <span>Parceiros</span>
        <ul class="listLogos">
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/parceiro-apex.png" alt="" class="img-fluid">
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/parceiro-cincorp.png" alt="" class="img-fluid">
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/parceiro-riorealty.png" alt="" class="img-fluid">
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/parceiro-lopes.png" alt="" class="img-fluid">
          </li>
        </ul>
      </div>
    </div>
    
		<div class="rodape">
      <div class="container">
        <p>Rua São Paulo, 700, Praia da Costa - Vila Velha/ES</p>
      </div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
