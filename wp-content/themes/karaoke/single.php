<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package karaoke
 */

get_header(); ?>
	<div class="container">
		<div class="row">
			<?php get_template_part('template-parts/menu-tab') ?>
			<div class="col-md-7 blog-single">
				<div class="col-md-9 content-single">
					<div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">

							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content-single', get_post_format() );


//							// If comments are open or we have at least one comment, load up the comment template.
//							if ( comments_open() || get_comments_number() ) :
//								comments_template();
//							endif;

							endwhile; // End of the loop.
							?>

						</main><!-- #main -->
					</div><!-- #primary -->
				</div>
				<div class="col-md-3 sidebar">
					<?php get_sidebar(); ?>
				</div>
			</div>

		</div>
	</div>

<?php
get_footer();
