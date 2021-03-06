<?php get_header(); 
      $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>
            
            <div id="content" class="clearfix row-fluid">
            
                <div id="main" class="span8 clearfix" role="main">
                
                    <div class="page-header">
                        <h1 class="archive_title h2">
                            <?php echo $term->name; ?>
                        </h1>
                    </div>

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
                    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
                        <header>
                            <h4 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                            <p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>"><?php the_date(); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.</p>
                        </header> <!-- end article header -->
                    
                        <section class="post_content">
                            <?php the_excerpt(); ?>
                        </section> <!-- end article section -->
                        
                        <footer>
                        </footer> <!-- end article footer -->
                    </article> <!-- end article -->
                    
                    <?php endwhile; ?>  
                    
                    <?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
                        <?php page_navi(); // use the page navi function ?>
                    <?php } else { // if it is disabled, display regular wp prev & next links ?>
                        <nav class="wp-prev-next">
                            <ul class="clearfix">
                                <li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
                                <li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
                            </ul>
                        </nav>
                    <?php } ?>
                                
                    <?php else : ?>
                    
                    <article id="post-not-found">
                        <header>
                            <h1><?php _e("No Posts Yet", "bonestheme"); ?></h1>
                        </header>
                        <section class="post_content">
                            <p><?php _e("Sorry, What you were looking for is not here.", "bonestheme"); ?></p>
                        </section>
                        <footer>
                        </footer>
                    </article>
                    <?php endif; ?>
            
                </div> <!-- end #main -->
    
                <?php get_sidebar(); // sidebar 1 ?>
    
            </div> <!-- end #content -->

<?php get_footer(); ?>
