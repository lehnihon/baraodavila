<?php
/**
 * @package site
 */

get_header(); ?>

<div id="reforma-titulo">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 animated fadeInUp">
				<a class="ref-apt" href="#">
					<img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/tipo2b.jpg"; ?>" />
					<h2 class="roxo">Reforma em apartamento</h2>
				</a>
				<h5>Orçamento rápido, detalhado e sem custo!<br>
				Só é preciso adicionar cômodo por cômodo que você pretende reformar e descrever o que pensou fazer em cada um deles.</h5>
			</div>
		</div>
	</div>
</div>

<div id="reforma-form">
	<div class="container">
		<div class="row">
			<div class="col-md-12 animated fadeInUp wow">
				<?php echo do_shortcode('[contact-form-7 id="11" title="Reforma Apartamento"]'); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
