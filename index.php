<?php get_header(); ?>

        <section class="row">
            <div class="nine columns">
        <!-- BEGIN LOOP -->
                <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>">Read More...</a>
                    <?php } // end while
                } // end if
                ?>
        <!-- END LOOP -->
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
        </section>

<?php get_footer(); ?>
