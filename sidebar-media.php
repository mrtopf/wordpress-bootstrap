<div id="sidebarmedia" class="fluid-sidebar sidebar span3" role="complementary">
    <div style="margin-bottom: 20px;">
        <iframe width="270" height="225" src="https://www.youtube-nocookie.com/embed/X_YRHHKOIhg?rel=0" frameborder="0" allowfullscreen></iframe>
        <a class="btn btn-info btn-mini btn-block" href="/live">zum Livestream mit Chat</a>
    </div>
    <a class="btn btn-primary btn-large btn-block" href="<?php echo esc_url(get_category_link( 22 )); ?>">Protokolle</a>
    <a class="btn btn-primary btn-large btn-block" href="<?php echo esc_url(get_category_link( 61 )); ?>">Video-Blog</a>
    <a class="btn btn-primary btn-large btn-block" href="<?php echo esc_url(get_category_link( 60 )); ?>">Podcast</a>
    <a class="btn btn-primary btn-large btn-block" href="<?php echo esc_url(get_category_link( 62 )); ?>">Bilder</a>

    <?php if ( is_active_sidebar( 'media' ) ) : ?>

        <?php dynamic_sidebar( 'media' ); ?>

    <?php else : ?>

        <!-- This content shows up if there are no widgets defined in the backend. -->
        
        <div class="alert alert-message">
        
            <p><?php _e("Please activate some Widgets","bonestheme"); ?>.</p>
        
        </div>

    <?php endif; ?>

</div>
