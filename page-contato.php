<?php
/**
 * @package site
 */

get_header(); ?>

<div id="contato-form">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php echo do_shortcode('[contact-form-7 id="21" title="Contato"]'); ?>
			</div>
		</div>
	</div>
</div>

<div id="maps">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 videoWrapper">
				<div class="box-endereco animated fadeInUp wow">
					<img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/contato-cor.jpg"; ?>" /><br><br>
					<p>
						Nosso escritório<br>
						São Paulo - SP - Brasil
					</p>
					<p class="contato-destaque">
						Rua Azevedo Soares, 1661 sala 11<br>
	 					Tatuapé - São Paulo
					</p>
					<p class="contato-destaqueb">
						11 3628-1204
					</p>
				</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.577576247415!2d-46.56292528452929!3d-23.547691084689646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5e8ec00d162f%3A0x66bb3c94d6969c3a!2sR.+Azevedo+Soares%2C+1661+-+Vila+Gomes+Cardim%2C+S%C3%A3o+Paulo+-+SP%2C+03322-001!5e0!3m2!1spt-BR!2sbr!4v1485790767166" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>

<div id="contato-redes">
	<div class="container">
		<div class="row">
			<div class="col-md-4 twitter">
				<img alt="logo" class="e-claro animated fadeInUp wow" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/contato-twitter.jpg"; ?>" />
			</div>
			<div class="col-md-4 instagran" >
				<img alt="logo" class="e-claro animated fadeInUp wow" data-wow-delay="0.25s" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/contato-instagran.jpg"; ?>" />
			</div>
			<div class="col-md-4 facebook" >
				<img alt="logo" class="e-claro animated fadeInUp wow" data-wow-delay="0.5s" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/contato-facebook.jpg"; ?>" />
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
