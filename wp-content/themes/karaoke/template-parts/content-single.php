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
    <div class="entry-content">
        <div class="container">
            <div class="row">
                <div class="thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
                <h1 class="title"><?php the_title(); ?></h1>
                <div class="content">
                    <?php the_content() ?>
                </div>

            </div>
        </div>
    </div><!-- .entry-content -->
</article><!-- #post-## -->
