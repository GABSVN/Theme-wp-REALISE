<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * 
 * 
* @package WordPress
 * @subpackage REALISE_Theme
 * @since REALISE_Theme 3000.1.0
 */



?>
			<footer id="site-footer" class="header-footer-group">

				<div class="section-inner">

					<div class="footer-credits">

						<p class="footer-copyright">&copy;
							<?php
							echo date_i18n(
								/* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
								_x( 'Y', 'copyright date format', 'themerealise' )
							);
							?>
							<a href="<?php echo esc_url('https://www.realise.ch/fr/formations-coaching-la-formation-digitale'); ?>"><?php bloginfo( 'name' ); ?></a>
						</p><!-- .footer-copyright -->

						<?php
						if ( function_exists( 'the_privacy_policy_link' ) ) {
							the_privacy_policy_link( '<p class="privacy-policy">', '</p>' );
						}
						?>

						<p class="powered-by-wordpress">
							<a href="<?php echo esc_url( __( 'https://www.realise.ch/fr/formations-coaching-la-formation-digitale', 'themerealise' ) ); ?>">
								<?php _e( 'Developped by Team REALISE', 'themerealise' ); ?>
							</a>
						</p><!-- .powered-by-wordpress -->

					</div><!-- .footer-credits -->

					<a class="img-mini" href="#site-header">
						<span class="to-the-top-long">
							<?php
							/* translators: %s: HTML character for up arrow. */

							printf( __('<img src= "/wp-content/themes/THEME-WP-REALISE/assets/images/Réalise-white-A-logo3.jpg" class="img-ToTheTOP"> %s', 'themerealise' ), 
							'' );
							?>
						</span><!-- .to-the-top-long -->



						
					</a><!-- .to-the-top -->

				</div><!-- .section-inner -->


			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
