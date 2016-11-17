<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package karaoke
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail('full') ?></a>
				</div>
				<div class="col-md-6">
					<?php the_excerpt() ?>
				</div>
			</div>
		</div>
	</div><!-- .entry-content -->

	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
