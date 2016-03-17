<?php
/* Template Name: Archive Page */

get_header(); ?>

<!--Beginning of Archive Page-->
<section class="row">
    <div class="nine columns">
        <?php if ( have_posts() ) : ?>
            <h2>Archives</h2>
            <p>A Page for our Archives</p>
            <?php
            // The Loop
            while ( have_posts() ) : the_post();?>
            <!--Data Context-->
                <h2>
                    <a href="<?php the_permalink() ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
            <?php the_excerpt(); ?>
            <?php endwhile; ?>
            <!-- End Loop -->
            <?php else: ?>
            <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
    </div>
    <div class="three columns">
        <!--Begin Sidebar-->
        <!--Add Search Form-->
            <?php get_search_form(); ?>
        <!--End Search Form-->
        <h2>Archives by Month:</h2>
        <ul>
            <?php wp_get_archives('type=monthly'); ?>
        </ul>
        <h2>Archives by Category:</h2>
        <ul>
             <?php wp_list_categories(); ?>
        </ul>
        <!--End Sidebar-->
        </div>

</section>
<!--End of Archive Page-->

<!--
<section class="row">
    <div class="six columns">
        <h2>Archives by Month:</h2>
        <ul>
            <?php wp_get_archives('type=monthly'); ?>
        </ul>
    </div>
    <div class="six columns">
        <h2>Archives by Category:</h2>
        <ul>
             <?php wp_list_categories(); ?>
        </ul>
    </div>
</section>
-->


<?php get_footer(); ?>