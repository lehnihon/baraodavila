<?php
/**
 * @package site
 */

get_header(); ?>

<div id="solucoes-sobre">
	<div class="container">
		<div class="row">
			<div class="col-md-12 animated fadeInUp">
				<h1>A Reforma Se</h1><br>
				<h5>A  Reforma Se é uma empresa especializada em reforma de imóveis, planejamento e execução de obras.<br>
Nossa proposta é planejar e realizar sua reforma de forma rápida, segura e eficiente.</h5>
			</div>
		</div><br><br><br>
		<div class="row">
			<div class="col-md-3 col-md-offset-1 animated fadeInLeft wow">
				<a class="ref-res" href="#">
					<img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/tipo1b.jpg"; ?>" />
					<p class="roxo">Reforma residencial</p>
				</a>
			</div>
			<div class="col-md-4 animated fadeIn wow">
				<a class="ref-apt" href="#">
					<img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/tipo2b.jpg"; ?>" />
					<p class="roxo">Reforma em apartamento</p>
				</a>
			</div>
			<div class="col-md-3 animated fadeInRight wow">
				<a class="ref-com" href="#">
					<img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/tipo3b.jpg"; ?>" />
					<p class="roxo">Reforma comercial</p>
				</a>
			</div>
		</div><br>
		<div class="row animated fadeInUp wow">
			<div class="col-md-12 text-left">
				<p class="roxo"><strong>Qualidade, eficiência e comprometimento na reforma do seu imóvel.</strong></p>
				<p>A qualidade da reforma do seu imóvel depende da qualidade, eficiência e comprometimento de todas as pessoas que que vão executar esse trabalho.<br>
				A Reforma Se entende isso muito bem e por somos diferentes de tudo que você já viu. Temos nossa própria equipe, todos qualificados e comprometidos com a
	reforma do seu imóvel.</p>
				<p>
					Isso faz toda a diferença, seja no atendimento, nas tarefas diárias da reforma, na limpeza do imóvel e em cada acabamento. Com isso, a Reforma Se ganhou destaque e hoje conta com uma equipe composta pelos mais diversos profissionais, desde engenheiros, projetistas, eletricistas, gesseiros e pedreiros com muita 
	experiência e anos de casa.
				</p>
			</div>
		</div>
	</div>
</div>

<div id="sobre">
	<div class="container">
		<div class="row">
			<div class="col-md-12 animated fadeInUp wow">
				<h2>Seguro e eficiente</h2><br>
				<h5>Veja como é simples reformar o seu imóvel.</h5>
			</div>
		</div><br><br><br>
		<div class="row animated fadeInUp wow">
			<div class="col-md-3 animated">
				<?php include 'images/sobre1b.svg'; ?>
				<h4>Orçamento gratuito</h4>
				<p>
					Você solicita um orçamento e a ReformaSe faz um planejamento detalhado e te envia sem custo nenhum a proposta para reforma.
				</p>
			</div>
			<div class="col-md-3">
				<?php include 'images/sobre2b.svg'; ?>
				<h4>Planejamento</h4>
				<p>
					Após a sua aprovação da proposta, você receberá um cronograma com todo o passo-a-passo da reforma do seu imóvel.
				</p>
			</div>
			<div class="col-md-3">
				<?php include 'images/sobre3b.svg'; ?>
				<h4>Garantia</h4>
				<p>
					Garantimos a execução da sua obra dentro do prazo  estipulado, assegurando toda a qualidade.
				</p>
			</div>
			<div class="col-md-3">
				<?php include 'images/sobre4b.svg'; ?>
				<h4>Segurança de contrato</h4>
				<p>
					Tenha a segurança do prazo de execução da sua reforma, bem como do valor acordado, garantidos em contrato
				</p>
			</div>
		</div><br><br><br>
		<div class="row animated fadeInUp wow">
			<div class="col-md-12">
				<a href="#orcamento" class="btn-redondo btn-roxo">Quero um Orçamento</a>
			</div>
		</div><br>
	</div>
</div>

<?php get_footer(); ?>
