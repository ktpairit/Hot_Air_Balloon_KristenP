<?php get_header(); ?>

    <section class="row">
        <div class="nine columns postVerbiage">
<!-- BEGIN PAGE PHP -->
            <?php if (have_posts()) :
                /* OUR DATA CONTEXT IS DEFINED  */
                while (have_posts()) : the_post(); ?>
                    <h3><?php the_title(); ?></h3>
                    <?php the_content();
                endwhile;
            endif; ?>
<!-- END PAGE PHP -->
        </div>
        <div class="three columns">
        <!-- BEGIN SIDEBAR -->
        <!-- Add Search Form -->
            <?php get_search_form(); ?>
            <!-- End Search Form -->
            <?php dynamic_sidebar('pages-widget'); ?>
        <!-- END SIDEBAR -->
        </div>
    </section>

<?php get_footer(); ?>