                <div id="sidebar-article" class="fluid-sidebar sidebar span3" role="complementary">
                    <h2>Über den Autor</h2>
                
                    <?php if ( is_active_sidebar( 'article' ) ) : ?>

                        <?php dynamic_sidebar( 'article' ); ?>

                    <?php else : ?>

                        <!-- This content shows up if there are no widgets defined in the backend. -->
                        
                        <div class="alert alert-message">
                        
                            <p><?php _e("Please activate some Widgets","bonestheme"); ?>.</p>
                        
                        </div>

                    <?php endif; ?>

                </div>
