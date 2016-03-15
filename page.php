<?php get_header(); ?>

    <div class="row">
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
        <div class="three columns">
        <!-- BEGIN SIDEBAR -->
        <!-- Add Search Form -->
            <?php get_search_form(); ?>
            <!-- End Search Form -->
            <?php get_sidebar(); ?>
            <p>I'M RIGHT HERE AND I"M A PART OF A PAGE!!!</p>
        <!-- END SIDEBAR -->
        </div>
    </div>

<?php get_footer(); ?>