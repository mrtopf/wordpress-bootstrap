<?php
/*
 * Template Name Posts: Kein Artikelbild
 * */
?>
<?php get_header(); ?>
            
            <div id="content" class="clearfix row">
            
                <div id="main" class="span9 clearfix" role="main">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
                    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
                        
                        <header>
                            <div class="page-header"><h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1></div>
                            <p class="meta">Veröffentlicht am <time datetime="<?php echo the_time('j.m.Y'); ?>" pubdate><?php the_date(); ?></time> von 
                            <?php 
                            if(function_exists('coauthors_posts_links')):
                                coauthors_posts_links(",", " und ");
                            else:
                                the_author_posts_link();
                            endif;
                            ?>
                            in <?php the_excluded_category(); ?>.</p>
                        </header> <!-- end article header -->
                    
                        <section class="post_content clearfix" itemprop="articleBody">
                            <?php the_content(); ?>
                            <?php wp_link_pages(); ?>
                        </section> <!-- end article section -->
                        
                        <footer>
            
                            <?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ' ', '</p>'); ?>

                            <?php
                            $terms = get_the_terms( $post->ID, 'ausschuss' );
                            if ( $terms && ! is_wp_error( $terms ) ) : 
                            ?>
                            <div class="ausschuss-tags">
                            <?php
                                foreach ( $terms as $term ) {
                                    echo '<a class="btn btn-mini btn-info" href="'.get_term_link($term->slug, 'ausschuss').'">Auschuss: '.$term->name.'</a>';
                                }
                            ?>
                            </div>

                            <?php endif; ?>




                            
                            <?php 
                            // only show edit button if user has permission to edit posts
                            if( $user_level > 0 ) { 
                            ?>
                            <a href="<?php echo get_edit_post_link(); ?>" class="btn btn-mini edit-post"><i class="icon-pencil"></i> <?php _e("Edit post","bonestheme"); ?></a>
                            <?php } ?>
                            
                        </footer> <!-- end article footer -->
                    
                    </article> <!-- end article -->
                    
                    <?php comments_template('',true); ?>
                    
                    <?php endwhile; ?>          
                    
                    <?php else : ?>
                    
                    <article id="post-not-found">
                        <header>
                            <h1><?php _e("Not Found", "bonestheme"); ?></h1>
                        </header>
                        <section class="post_content">
                            <p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
                        </section>
                        <footer>
                        </footer>
                    </article>
                    
                    <?php endif; ?>
            
                </div> <!-- end #main -->
    
                <?php get_sidebar("article"); // sidebar 1 ?>
    
            </div> <!-- end #content -->

<?php get_footer(); ?>
