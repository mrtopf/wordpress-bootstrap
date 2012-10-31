<div id="sidebar-article" class="fluid-sidebar sidebar span3" role="complementary">
    <div class="author-box">
        <h3>Über <?php the_author(); ?></h3>
        <div class="author-image-container">
            <img class="author-image" src="<?php the_author_meta('author_image'); ?>" title="<?php the_author(); ?>" />
        </div>
        <div class="author-bio">
            <?php the_author_meta('description'); ?>
        </div>
        <div class="author-more-link">
            <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>">Mehr über <?php the_author_meta('display_name'); ?></a>
        </div>
        <div class="author-socialmedia">
            <?php if (get_the_author_meta("user_tw")) { ?>
                    <a href="<?php the_author_meta('user_tw'); ?>">
                        <img src="<?php bloginfo('template_directory') ?>/images/icons/twitter-32x32.png" title="twitter">
                    </a>
            <?php } ?>
            <?php if (get_the_author_meta("user_fb")) { ?>
                    <a href="<?php the_author_meta('user_fb'); ?>">
                        <img src="<?php bloginfo('template_directory') ?>/images/icons/facebook-32x32.png" title="facebook">
                    </a>
            <?php } ?>
        </div>
    </div>
    
    <?php if ( is_active_sidebar( 'article' ) ) : ?>

        <?php dynamic_sidebar( 'article' ); ?>

    <?php else : ?>

        <!-- This content shows up if there are no widgets defined in the backend. -->
        
        <div class="alert alert-message">
        
            <p><?php _e("Please activate some Widgets","bonestheme"); ?>.</p>
        
        </div>

    <?php endif; ?>

</div>
