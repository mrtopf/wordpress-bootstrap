<div id="sidebar1" class="fluid-sidebar sidebar span3" role="complementary">
    <?php 
        $args = array(
            'posts_per_page' => 4,
            'category_name' => 'featured'
        );
        query_posts( $args );
    ?>
    <?php if (have_posts()): ?>
    <div id="featured-container">
        <div id="featured">
            <?php while (have_posts()) : the_post(); ?>
                <div data-caption="#caption-<?php the_ID();?>" >
                    <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('wpbs-boxed', array('height' => '250', 'title' => get_the_title()))?></a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <?php while (have_posts()) : the_post(); ?>
        <span class="orbit-caption" id="caption-<?php the_ID();?>"><?php the_title(); ?></span>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php if ( is_active_sidebar( 'overview' ) ) : ?>
        <?php dynamic_sidebar( 'overview' ); ?>
    <?php endif; ?>
</div>
