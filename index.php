<?php get_header(); ?>

        <section class="row topLine">
            <div class="nine columns posts">
        <!--Begin Loop-->
                <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>

                <div class="row">
                    <div class="four columns index-post-thumbnail">
                    <!--image-->
                        <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail('medium');
                        } ?>
                    </div>

                    <div class="eight columns">
                    <!--title-->
                        <h3>
                            <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?></a>
                        </h3>
                    <!--excerpt-->
                        <?php the_excerpt(); ?>
                    <!--read more-->
                        <a href="<?php the_permalink(); ?>">Read More...</a>
                    </div>
                </div>

                    <?php } // end while
                } // end if
                ?>
            </div>
            <!--End Loop-->

            <div class="three columns">
            <!--Begin Sidebar-->
                <?php dynamic_sidebar('front-page'); ?>
            <!--End Sidebar-->
            </div>
        </section>

<?php get_footer(); ?>
