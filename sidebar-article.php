<div id="sidebar-article" class="fluid-sidebar sidebar span3" role="complementary">
    <?php
        $show_authorbox = get_post_meta( $post->ID, '_pp_show_authorbox', true);
        if ($show_authorbox) {
    ?>
    <div class="author-box">
        <h4>Autor</h4>
        <?php if (get_the_author_meta("author_image")) { ?>
            <div class="author-image-container">
                <img class="author-image" src="/wp-content/uploads/autoren/<?php the_author_meta('author_image'); ?>-130.jpg" title="<?php the_author(); ?>" />
            </div>
        <?php } ?>
        <div class="author-more-link">
            <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php the_author_meta('display_name'); ?></a><br>
        </div>
    </div>
    <?php
        }
    ?>
    
    <?php if ( is_active_sidebar( 'article' ) ) : ?>

        <?php dynamic_sidebar( 'article' ); ?>

    <?php else : ?>

        <!-- This content shows up if there are no widgets defined in the backend. -->
        
        <div class="alert alert-message">
        
            <p><?php _e("Please activate some Widgets","bonestheme"); ?>.</p>
        
        </div>

    <?php endif; ?>

</div>
