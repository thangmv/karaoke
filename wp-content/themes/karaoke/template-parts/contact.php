<?php
/*
Template name: Contact
*/?>
<?php get_header();?>
    <div class="container" id="about">
        <div class="row">
            <?php require ("/menu-tab.php");?>
            <div class="col-md-7 pagecontent">
                <h1><?php the_title();?></h1>
                <?php if ( have_posts() ) while ( have_posts() ) : the_post();
                    echo the_content();
                endwhile; ?>
            </div>
        </div>
    </div>
<?php get_footer();?>