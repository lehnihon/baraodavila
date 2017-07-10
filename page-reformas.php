<?php
/**
 * @package site
 */

get_header(); ?>

<div id="solucoes-sobre">
	<div class="container">
		<div class="row">
			<div class="col-md-12 animated fadeInUp">
				<h1>Qual o tipo de reforma?</h1><br>
				<h5>Indique abaixo se você deseja realizar uma reforma residencial, reforma em apartamento, reforma comercial ou construção.</h5>
			</div>
		</div><br><br><br>
		<div class="row">
			<div class="col-md-3 col-md-offset-1 animated fadeInLeft wow">
				<a class="ref-res" href="<?php echo home_url( '/' )."reforma-residencial"; ?>">
					<img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/tipo1b.jpg"; ?>" />
					<p class="roxo">Reforma residencial</p>
				</a>
			</div>
			<div class="col-md-4 animated fadeIn wow">
				<a class="ref-apt" href="<?php echo home_url( '/' )."reforma-apartamento"; ?>">
					<img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/tipo2b.jpg"; ?>" />
					<p class="roxo">Reforma em apartamento</p>
				</a>
			</div>
			<div class="col-md-3 animated fadeInRight wow">
				<a class="ref-com" href="<?php echo home_url( '/' )."reforma-comercial"; ?>">
					<img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/tipo3b.jpg"; ?>" />
					<p class="roxo">Reforma comercial</p>
				</a>
			</div>
		</div>
	</div>
</div>

<div id="sobre-reformas">
	<div class="container">
		<div class="row">
			<div class="col-md-12 animated fadeInUp wow">
				<h2>Reforma de Imóveis</h2><br>
				<h5>A  Reforma Se é uma empresa especializada em reforma de imóveis, planejamento e execução de obras.<br>
				Nossa proposta é planejar e realizar sua reforma de forma rápida, segura e eficiente.</h5>
			</div>
		</div><br><br><br>
		<div class="row animated fadeInUp wow">
			<div class="col-md-3 animated">
				<img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre1b.jpg"; ?>" />
				<h4>Orçamento gratuito</h4>
				<p>
					Você solicita um orçamento e a ReformaSe faz um planejamento detalhado e te envia sem custo nenhum a proposta para reforma.
				</p>
			</div>
			<div class="col-md-3">
				<img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre2b.jpg"; ?>" />
				<h4>Planejamento</h4>
				<p>
					Após a sua aprovação da proposta, você receberá um cronograma com todo o passo-a-passo da reforma do seu imóvel.
				</p>
			</div>
			<div class="col-md-3">
				<img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre3b.jpg"; ?>" />
				<h4>Garantia</h4>
				<p>
					Garantimos a execução da sua obra dentro do prazo  estipulado, assegurando toda a qualidade.
				</p>
			</div>
			<div class="col-md-3">
				<img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre4b.jpg"; ?>" />
				<h4>Segurança de contrato</h4>
				<p>
					Tenha a segurança do prazo de execução da sua reforma, bem como do valor acordado, garantidos em contrato
				</p>
			</div>
		</div><br><br><br>
		<div class="row animated fadeInUp wow">
			<div class="col-md-12">
				<a href="<?php echo home_url( '/' )."reformas"; ?>" class="btn-redondo btn-branco">Quero um Orçamento</a>
			</div>
		</div><br>
	</div>
</div>

<?php get_footer(); ?>
