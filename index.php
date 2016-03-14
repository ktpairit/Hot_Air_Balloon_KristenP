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
                <h4>Sidebar</h4>
                <p>Sidebar paragraph...</p>
        </section>

<?php get_footer(); ?>
