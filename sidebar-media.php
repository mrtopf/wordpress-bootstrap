<div id="sidebarmedia" class="fluid-sidebar sidebar span3" role="complementary">
    <?php /*
    <a class="btn btn-primary btn-large btn-block" href="<?php echo esc_url(get_category_link( 22 )); ?>">Protokolle</a>
    <a class="btn btn-primary btn-large btn-block" href="<?php echo esc_url(get_category_link( 61 )); ?>">Video-Blog</a>
    <a class="btn btn-primary btn-large btn-block" href="<?php echo esc_url(get_category_link( 60 )); ?>">Podcast</a>
    <a class="btn btn-primary btn-large btn-block" href="<?php echo esc_url(get_category_link( 62 )); ?>">Bilder</a>
    */
    ?>


    <?php if ( is_active_sidebar( 'media' ) ) : ?>

        <?php dynamic_sidebar( 'media' ); ?>

    <?php else : ?>

        <!-- This content shows up if there are no widgets defined in the backend. -->
        
        <div class="alert alert-message">
        
            <p><?php _e("Please activate some Widgets","bonestheme"); ?>.</p>
        
        </div>

    <?php endif; ?>

</div>
