<?php get_header(); ?>

        <section class="row">
            <div class="two columns">
            <!--Begin Sidebar-->
                <?php dynamic_sidebar('single-left-widget'); ?>
            <!--End Sidebar-->
            </div>
            <div class="eight columns">
        <!-- BEGIN LOOP -->
                <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>
                        <h2><?php the_title(); ?></h2>

                        <?php if ( has_post_thumbnail() ) {
                        ?>
                        <div class="single-post-thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                        <?php
                            }
                        ?>

                        <?php the_content();
                    } // end while
                } // end if
                ?>
        <!-- END LOOP -->
            </div>

            <div class="two columns">
            <!--Begin Sidebar-->
                <?php dynamic_sidebar('single-right-widget'); ?>
            <!--End Sidebar-->
            </div>

        </section>

<?php get_footer(); ?>
