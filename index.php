<?php get_header(); ?>

        <section class="row">
            <div class="nine columns">
        <!--Begin Loop-->
                <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>
                        <h3><?php the_title(); ?></h3>

                        <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail('thumbnail');
                        } ?>

                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>">Read More...</a>
                    <?php } // end while
                } // end if
                ?>
        <!--End Loop-->
            </div>
            <div class="three columns">
            <!--Begin Sidebar-->
            <!--Add Search Form-->
                <?php get_search_form(); ?>
                <!--End Search Form-->
                <?php get_sidebar(); ?>
                <p>I'M RIGHT HERE AND I"M A PART OF A PAGE!!!</p>
            <!--End Sidebar-->
            </div>
        </section>

<?php get_footer(); ?>
