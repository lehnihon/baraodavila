<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<script>
new WOW().init();
</script>
</head>

<body <?php body_class(); ?>>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91023009-1', 'auto');
  ga('send', 'pageview');

</script>
<div id="page">
	<nav id="principal">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="menu-responsivo">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
						</button>
						<ul class="dropdown-menu">
						<li><a href="#page">início</a></li
						><li><a href="#fotos">fotos</a></li
						><li><a href="#rifa">rifa</a></li
						><li><a href="#localizacao">localização</a></li
						><li><a href="#contato">fale conosco</a></li>
						</ul>								
					</div>
				</div>
				<div class="col-md-4 logo-container">
					<a href="<?php echo home_url( '/' ); ?>"><img class="logo" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo.png"; ?>" /></a>
				</div>
				<div class="col-md-4">
					<ul class="redes_sociais_header menu-header">
		              <li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCb42k7qXDCeQSI7LvPDc8ZA"></a></li>
		              <li class="instagram"><a target="_blank" href="https://www.instagram.com/datacerta"></a></li>
		              <li class="twitter"><a target="_blank" href="https://twitter.com/datacertalog"></a></li>
		              <li class="facebook"><a target="_blank" href="https://www.facebook.com/datacertalogistica"></a></li>
		              <li class="linkedin"><a target="_blank" href="https://www.linkedin.com/company-beta/10804304"></a></li>
					</ul>
					<div class="menu-header clearfix">
						<div class="menu-op"><a class="hvr-underline-from-left" href="#contato">fale conosco</a></div>				
						<div class="menu-op"><a class="hvr-underline-from-left" href="#localizacao">localização</a></div>
						<div class="menu-op"><a class="hvr-underline-from-left" href="#rifa">rifa</a></div>
					</div>
				</div>
			</div>
		</div>
	</nav>
