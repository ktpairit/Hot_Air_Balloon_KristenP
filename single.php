<?php get_header(); ?>

        <section class="row">
            <div class="two columns">
                <p>Sidebar</p>
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
                <p>Sidebar - This is a SINGLE POST PAGE</p>
            </div>
        </section>

<?php get_footer(); ?>
