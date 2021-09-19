<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

  <a 
    href="https://api.whatsapp.com/send?phone=5527999940555&text=Ol%C3%A1!" 
    title="Atendimento online" 
    target="_blank" 
    class="btnFlutuante_whatsapp">
    <img 
      class="img-fluid"
      alt="Atendimento online" 
      src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-whatsapp.svg"
    >
    <span>Atendimento <strong>online</strong></span>
  </a>

	<header id="masthead" class="site-header">
		<div class="container">
			<h1 class="site-title animateDown">
        <?php the_custom_logo(); ?>
      </h1>
		</div>
	</header>
