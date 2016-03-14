<?php get_header(); ?>

    <div class="row">
<!-- BEGIN SIDEBAR -->
        <div class="three columns">
            <?php sidebar(); ?>
        </div>
<!-- END SIDEBAR -->
        <div class="nine columns">
<!-- BEGIN PAGE PHP -->
            <?php if (have_posts()) :
                /* OUR DATA CONTEXT IS DEFINED  */
                while (have_posts()) : the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content();
                endwhile;
            endif; ?>
<!-- END PAGE PHP -->
        </div>
    </div>

<?php get_footer(); ?>