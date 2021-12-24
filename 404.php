<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package alamanotarot
 */

get_header();
?>

	<main id="primary" class="site-main main-404">

		<section class="main-404-section">
			<div class="content-404 p-404">
				<h1>Oops! No hay nada por aquí</h1>
				<P>No te preocupes, a veces pasa. Intenta buscar otra vez.</P>
				<a href="<?php  echo home_url(); ?>">Volver al inicio</a>
					<div class="search-div">
					<?php echo do_shortcode("[wpdreams_ajaxsearchlite]"); ?>
					</div>
			</div>
			<div class="content-404">
				<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				viewBox="0 0 1000 429.27" style="enable-background:new 0 0 1000 429.27;" xml:space="preserve">
				<style type="text/css">
				.st0{fill:#8A2F28;}
				</style>
				<g>
				<path class="st0" d="M308.58,18.72V407.3H199.27V110.67l-48.39,96.22h23.91v84.55H23.06L138.07,18.72H308.58z"/>
				<path class="st0" d="M358.4,255.57v-85.4c0-49.72,12.38-89,37.15-117.85c24.77-28.85,58.5-43.27,101.2-43.27
				c42.7,0,76.48,14.42,101.34,43.27c24.86,28.85,37.29,68.13,37.29,117.85v85.4c0,49.72-12.43,89.06-37.29,118
				c-24.86,28.94-58.64,43.41-101.34,43.41c-42.7,0-76.43-14.47-101.2-43.41C370.78,344.63,358.4,305.29,358.4,255.57z M469.14,147.39
				v130.95c0,23.73,9.2,35.58,27.61,35.58c18.6,0,27.9-11.86,27.9-35.58V147.39c0-23.72-9.3-35.58-27.9-35.58
				C478.34,111.81,469.14,123.67,469.14,147.39z"/>
				<path class="st0" d="M971.3,18.72V407.3H861.99V110.67l-48.39,96.22h23.91v84.55H685.77L800.78,18.72H971.3z"/>
				</g>
				</svg>
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();
