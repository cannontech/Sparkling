<?php

    if ( get_option( 'show_on_front' ) == 'posts' ) {
        get_template_part( 'index' );
    } elseif ( 'page' == get_option( 'show_on_front' ) ) {

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="post-inner-content">

				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="entry-content">
							<?php the_content(); ?>
							
							<!--test-->
							<img src='<?php wp_list_pages('sort_column=menu_order'); ?>'/>
							<!--test-->
							
							<?php
								wp_link_pages( array(
									'before' => '<div class="page-links">' . __( 'Pages:', 'sparkling' ),
									'after'  => '</div>',
								) );
							?>
						</div><!-- .entry-content -->
					</article><!-- #post-## -->

					<?php /*get_sidebar( 'home' );*/ ?>
				<?php endwhile; // end of the loop. ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php
	get_footer();
}
?>