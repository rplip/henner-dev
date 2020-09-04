<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="main">
        <div id="navgap">
            
            <?php if(have_posts()) :?>
            <?php while ( have_posts()) : the_post(); ?>
            <?php get_template_part( 'template-parts/content' ); ?>
            <?php endwhile; else : ?>
                <p>Nothing to display</p>
            <?php endif; ?>

        </div>
</div>




<?php get_footer(); ?>