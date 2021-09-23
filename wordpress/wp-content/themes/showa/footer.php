<footer id="colophon" class="site-footer">
    <div class="boxFooter">
      <div class="container d-flex flex-sm-row flex-column justify-content-between align-items-center">
        <a href="https://goo.gl/maps/rhJPsaTAeaaGTcz48" target="_blank" rel="noopener noreferrer" class="btn-default" class="Estande de vendas">
          Estande de vendas
        </a>

        <ul class="socialIcons">
          <?php
            if( have_rows('redes_sociais', 'option') ) :
              while( have_rows('redes_sociais', 'option') ) : the_row();
          ?>
            <li>
              <a href="<?php the_sub_field('url', 'option'); ?>" title="<?php the_sub_field('titulo', 'option'); ?>" target="_blank" rel="noopener noreferrer">
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
        <strong>Parceiros</strong>
        <ul class="listLogos">
          <li>
            <span>Realização</span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/parceiro-apex.png" alt="" class="img-fluid">
          </li>
          <li>
            <span>Incorporação e construção</span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/parceiro-cincorp.png" alt="" class="img-fluid">
          </li>
          <li>
            <span>Gestão de vendas</span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/parceiro-riorealty.png" alt="" class="img-fluid">
          </li>
          <li>
            <span>Comercialização</span>
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

<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#084630"
    },
    "button": {
      "background": "#d4a849",
      "text": "#ffffff"
    }
  },
  "theme": "classic",
  "position": "bottom-left",
  "type": "opt-out",
  "content": {
    "message": "Este site usa cookies para garantir que você obtenha a melhor experiência em nosso site.",
    "dismiss": "Aceitar",
    "deny": "Recusar cookies",
    "link": "Saiba mais",
    "href": "https://showanatureliving.com.br/politicas-de-privacidade-e-cookies/"
  }
});
</script>

<?php wp_footer(); ?>

</body>
</html>
