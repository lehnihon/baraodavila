<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package site
 */

?>
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center animated fadeInUp wow">
					<div class="menu-footer clearfix">
						<div class="menu-op"><a href="#page">início</a></div>
						<div class="menu-op"><a href="#fotos">fotos</a></div>
						<div class="menu-op"><a href="#rifa">rifa</a></div>
						<div class="menu-op"><a href="#localizacao">localização</a></div>
						<div class="menu-op"><a href="#contato">fale conosco</a></div>
					</div>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-12 text-center animated fadeInUp wow">
					<div id="redes_footer">
						<ul class="redes_sociais_footer">
			              <li class="youtube"><a target="_blank" href="https://www.facebook.com/seimidigital/"></a></li>
			              <li class="instagram"><a target="_blank" href="https://twitter.com/SeimiDigital"></a></li>
			              <li class="twitter"><a target="_blank" href="https://www.instagram.com/seimidigital/"https://www.instagram.com/seimidigital/></a></li>
						</ul>
					</div>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-12 text-center text-footer fadeInUp wow">
					&copy; Copyright <?php echo date('Y') ?> - Festa Junina da Igreja Tenrikyo Piratininga
				</div>
			</div>
		</div>
	</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
