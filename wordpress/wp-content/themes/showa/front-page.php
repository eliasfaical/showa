<?php 
  /**
   * Template Name: Home
   */
  get_header(); 
?>

	<main id="primary" class="site-main">

    <?php
      // Banner
      get_template_part( './sections/banner' );

      // Destaque
      get_template_part( './sections/destaque' );

      // Video
      // get_template_part( './sections/video' );

      // Galeria
      get_template_part( './sections/galeria' );

      // Detalhes
      get_template_part( './sections/detalhes' );

      // Arquitetos
      get_template_part( './sections/arquitetos' );

      // Contato
      get_template_part( './sections/contato' );
    ?>

	</main>

<?php
get_footer();
