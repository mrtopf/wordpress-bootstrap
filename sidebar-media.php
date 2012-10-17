                <div id="sidebarmedia" class="fluid-sidebar sidebar span3" role="complementary">
                
                    <?php if ( is_active_sidebar( 'media' ) ) : ?>

                        <?php dynamic_sidebar( 'media' ); ?>

                    <?php else : ?>

                        <!-- This content shows up if there are no widgets defined in the backend. -->
                        
                        <div class="alert alert-message">
                        
                            <p><?php _e("Please activate some Widgets","bonestheme"); ?>.</p>
                        
                        </div>

                    <?php endif; ?>
                <a href="#" class="btn btn-block btn-primary btn-large">Protokolle</a>
                <a href="#" class="btn btn-block btn-primary btn-large">Video-Blog</a>
                <a href="#" class="btn btn-block btn-primary btn-large">Podcast</a>
                <a href="#" class="btn btn-block btn-primary btn-large">Bilder</a>

                </div>
