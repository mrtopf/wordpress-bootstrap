<div id="sidebar1" class="fluid-sidebar sidebar span3" role="complementary">
<div class="slider-wrapper theme-light">
    <div id="slider" class="nivoSlider">
    <?php 
        $args = array(
            'posts_per_page' => 4,
            'category_name' => 'featured'
        );
        query_posts( $args );
    ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('wpbs-boxed', array('title' => get_the_title()))?></a>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

    <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

        <?php dynamic_sidebar( 'sidebar1' ); ?>

    <?php else : ?>

        <!-- This content shows up if there are no widgets defined in the backend. -->
        
        <div class="alert alert-message">
        
            <p><?php _e("Please activate some Widgets","bonestheme"); ?>.</p>
        
        </div>

    <?php endif; ?>

</div>
