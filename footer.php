<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alamanotarot
 */

?>

<footer class="site-footer">
    <div class="container py-5 footer-container">
      <div class="row py-4">
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4 h6-footer">Menu</h6>
          <nav id="site-navigation" class="fotter-nav-section">
			<?php
			wp_nav_menu(
				array(
					'menu'                 => '',
					'container'            => false,
					'theme_location'       => 'menu-1',
				)
			);
			?>
		</nav>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4 h6-footer">Legal</h6>
		  <nav id="site-navigation" class="fotter-nav-section-2">
			<?php
			wp_nav_menu(
				array(
					'menu'                 => '',
					'container'            => false,
					'theme_location'       => 'menu-2',
				)
			);
			?>
		</nav>
        </div>
		<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
		<h6 class="text-uppercase font-weight-bold mb-4 h6-footer">Social</h6>
          <p class="font-italic p-footer">¡Sigamos en contacto! Conecta conmigo a través de mis redes sociales</p>
          <ul class="list-inline mt-4">
            <li class="list-inline-item"><a href="https://t.me/ALaManoTarot" target="_blank" title="Telegram"><i class="fab fa-telegram-plane"></i></a></li>

            <li class="list-inline-item"><a href="https://wa.me/message/UO3YM2ZJFSYOM1" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i></a></li>

            <li class="list-inline-item"><a href="https://www.instagram.com/alamanotarot/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>

            <li class="list-inline-item"><a href="https://www.youtube.com/c/AlaManoTarot" target="_blank" title="YouTube"><i class="fab fa-youtube"></i></a></li>

          </ul>
        </div>
		<div class="col-lg-4 col-md-6 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4 h6-footer">Newsletter</h6>
          <p class="mb-4 p-footer">Enterate de todas las novedades de A la Mano Tarot suscribriendote a nuestro Newsletter.</p>
          <div class="footer-button">
		  <a class="footer-button-a" href="#"><button>Suscribirme al Newsletter</button><i class="far fa-envelope footer-button-icon"></i></a>
          </div>
        </div>
      </div>
    </div>

    <!-- Copyrights -->
    <div class="py-4 co copyright-footer">
      <div class="container text-center">
        <p class="mb-0 py-2 p-footer">Copyright &copy; 2021 - All rights reserved by <a class="a-p-copyright" href="<?php echo get_site_url();?>"> <?php bloginfo()?></a> - Sitio creado por <a class="a-p-copyright" href="https://freg.online/" target="_blank" title="Freg Design">Freg</a></p>
      </div>
    </div><!-- enf footer container -->
  </footer> <!-- end footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
