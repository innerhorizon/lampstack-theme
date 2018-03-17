<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package lampstack
 */

get_header();
?>

	<div id="primary" class="content-area w3-row">
		<main id="main" class="site-main">
            <div class="w3-twothird">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
            </div>
            <div class="w3-third">
                <?php get_sidebar(); ?>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
