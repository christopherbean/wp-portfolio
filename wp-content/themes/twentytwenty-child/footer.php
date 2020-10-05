<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
			<footer id="site-footer" role="contentinfo" class="header-footer-group">
                <div class="content-wrapper">
				<div class="section-inner">
                    

					<div class="footer-credits">
                        <nav class="social-media-navigation" role="navigation">
                            <?php wp_nav_menu(array('theme_location' => 'social', 'menu_class' => 'social-media-menu')); ?>
                        </nav>
						<p class="footer-copyright">&copy;
							<?php
							echo date_i18n(
								/* translators: Copyright date format, see https://www.php.net/date */
								_x( 'Y', 'copyright date format', 'twentytwenty' )
							);
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						</p><!-- .footer-copyright -->

					</div><!-- .footer-credits -->

				</div><!-- .section-inner -->
                </div>
			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
