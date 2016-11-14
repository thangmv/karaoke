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
				<div class="col-md-4">
					<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail('full') ?></a>
				</div>
				<div class="col-md-8">
					<?php the_excerpt() ?>
				</div>
			</div>
		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<div class="row">
			<div class="col-md-9 left">
				<?php karaoke_entry_footer(); ?>
			</div>
			<div class="col-md-3 right">
				<a href="<?php the_permalink() ?>">Read more</a>
			</div>
		</div>

	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
