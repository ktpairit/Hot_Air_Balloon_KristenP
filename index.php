<?php get_header(); ?>

        <section class="row topLine">
            <div class="nine columns">
        <!--Begin Loop-->
                <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>


                    <div class="row indexPosts">
                        <div class="four columns index-post-thumbnail">
                        <!--image-->
                            <?php if ( has_post_thumbnail() ) {
                                the_post_thumbnail('large');
                            } ?>
                        </div>

                        <div class="eight columns postVerbiage">
                        <!--title-->
                            <h3>
                                <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?></a>
                            </h3>
                            <!--date-->
                            <p class="postDate">
                                <?php the_date(); ?>
                            </p>
                        <!--excerpt-->
                            <?php the_excerpt(); ?>
                        <!--read more-->
                            <div class="viewMore">
                                <a href="<?php the_permalink(); ?>">View Post >></a>
                            </div>
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
