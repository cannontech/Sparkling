<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sparkling
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .site-content -->

	<div id="footer-area">
		<div class="container footer-inner">
			<div class="row">
				<?php /*get_sidebar( 'footer' );*/ ?>
			</div>
		</div>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info container">
				<div class="row">
					<?php sparkling_social(); ?>
					<nav role="navigation" class="col-md-6">
						<?php /*sparkling_footer_links(); */?>
					</nav>
					<div class="copyright col-md-6">
						<div>Store: 
						<?php 
							if ( false === ( $value = get_transient( 'store_list' ) ) ) {
								//this code runs when there is no valid transient set
								$tmp = apply_filters('gsn_get_featured_recipe', $v);
							} 
							$tmp = json_decode(get_transient( 'store_list' ));
							echo $tmp[0]->{'StoreName'};
							echo ' ';
							if ( false === ( $value = get_transient( 'site_config' ) ) ) {
								// this code runs when there is no valid transient set
								$tmp2 = apply_filters('gsn_get_site_config', $v);
							} 
							$tmp2 = json_decode(get_transient( 'site_config'), true);
							echo $tmp2['GoogleSiteSearchCode'];
							//var_dump($tmp2);
						?>
						</div>
						<?php /*echo of_get_option( 'custom_footer_text', 'sparkling' ); */ ?>
						<?php /*sparkling_footer_info(); */ ?>
					</div>
				</div>
			</div><!-- .site-info -->
			<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>