<?php get_header(); ?>
    <div class="page-header">
        <h1>Unsere Themen</h1>
    </div>
    <div class="hero-unit">
        <h2>Themensuche</h2>
            <form class="form-search" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
                <label class="description">
                    Du suchst nach einem Thema? Dann bist Du hier richtig! Gib einfach das Thema, das Dich interessiert
                    in das Suchfeld ein oder durchsuche die Themengebiete manuell.
                </label>
                <input type="text" name="thema" id="s" class="span8 search-query" placeholder="z.B. Dichtheitsprüfung">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
    </div>

    <div id="content" class="clearfix row">
        <div class="span4">
            <h3>zuletzt aktualisierte Themen</h3> 
            <?php
                    $cat_array = array();
                    $args=array(
                      'post_type' => 'post',
                      'post_status' => 'publish',
                      'posts_per_page' => 10,
                      'caller_get_posts'=> 1
                      );
                    $my_query = null;
                    $my_query = new WP_Query($args);
                    if( $my_query->have_posts() ) {
                      while ($my_query->have_posts()) : $my_query->the_post();
                        $cat_args=array('orderby' => 'none');
                        $cats = wp_get_post_terms( $post->ID , 'thema', $cat_args);
                        foreach($cats as $cat) {
                          $cat_array[$cat->term_id] = $cat->term_id;
                        }
                      endwhile;
                    }
                    if ($cat_array) {
                      foreach($cat_array as $cat) {
                        $category = get_term_by('ID',$cat, 'thema');
                        echo '<a href="' . esc_attr(get_term_link($category, 'category')) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a>'.'<br />';
                      }
                    }
                    wp_reset_query();
            ?>
        </div>
        <div class="span4">
            <h3>Aktuelle Themen</h3> 
        </div>
        <div class="span4">
            <h3>Unsere Positionen</h3> 
        </div>

    </div>

            
            <div id="content" class="clearfix row">
            
                <div id="main" class="span8 clearfix" role="main">
                


                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
                    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
                        
                        <header>
                            
                            <h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                            
                            <p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>"><?php the_date(); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.</p>
                        
                        </header> <!-- end article header -->
                    
                        <section class="post_content">
                        
                            <?php the_post_thumbnail( 'wpbs-featured' ); ?>
                        
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
