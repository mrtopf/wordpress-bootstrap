<?php get_header(); ?>
            
            <div id="content" class="clearfix row-fluid small-gallery">
            
                <div id="main" class="span8 clearfix" role="main">
                
                    <div class="page-header underline">
                    <?php if (is_category()) { ?>
                        <h1 class="archive_title h2">
                            Alle Artikel in <?php single_cat_title(); ?>
                        </h1>
                    <?php } ?>
                    </div>

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
                    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
                        <header>
                            <h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                            <p class="meta">Veröffentlicht am <time datetime="<?php echo the_time('d.m.Y'); ?>"><?php echo the_time("d.m.Y"); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> unter <?php the_category(', '); ?>.</p>
                        </header> <!-- end article header -->
                    
                        <section class="post_content">
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
    
                <?php get_sidebar("overview"); // sidebar 1 ?>
    
            </div> <!-- end #content -->

<?php get_footer(); ?>
