<?php get_header(); ?>
            <div id="content" class="clearfix row">
            
                <div id="main" class="span6 clearfix" role="main">

                <?php global $query_string;
                    query_posts( $query_string . '&cat=42&ignore_sticky_posts=1' ); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
                    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
                        
                        <header>
                            <h1 class="h2">
                                    <?php if (in_category("mitmachen")): ?>
                                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Mitmachen bei <?php the_title_attribute(); ?>">
                                        <span class="mitmachen">Mitmachen!</span>
                                        </a>
                                    <?php endif ?>
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                    <?php if (in_category("diskussion")): ?>
                                        <span class="label label-info">DISKUSSION</span>
                                    <?php endif ?>
                                    <?php if (in_category("position")): ?>
                                        <span class="label label-position">POSITION</span>
                                    <?php endif ?>
                            </h1>
                            <p class="meta">Veröffentlicht am <time datetime="<?php echo the_time('Y-m-d'); ?>"><?php echo the_time('j.m.Y'); ?></time> von 
                            <?php if(function_exists('coauthors_posts_links'))
                                coauthors_posts_links(",", " und ");
                            else
                                the_author_posts_link();
                            ?>
                            in <?php the_excluded_category(); ?>.</p>
                        
                        </header> <!-- end article header -->
                    
                        <section class="post_content clearfix">
                            <?php the_content( "Weiterlesen &raquo;" ); ?>
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
                                <li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "wordpress-bootstrap")) ?></li>
                                <li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "wordpress-bootstrap")) ?></li>
                            </ul>
                        </nav>
                    <?php } ?>      
                    
                    <?php else : ?>
                    
                    <article id="post-not-found">
                        <header>
                            <h1><?php _e("Not Found", "wordpress-bootstrap"); ?></h1>
                        </header>
                        <section class="post_content">
                            <p><?php _e("Sorry, but the requested resource was not found on this site.", "wordpress-bootstrap"); ?></p>
                        </section>
                        <footer>
                        </footer>
                    </article>
                    
                    <?php endif; ?>
            
                </div> <!-- end #main -->
    
                <?php get_sidebar("media"); // sidebar 1 ?>
                <?php get_sidebar(); // sidebar 1 ?>
    
            </div> <!-- end #content -->

<?php get_footer(); ?>
