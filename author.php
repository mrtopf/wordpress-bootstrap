<?php get_header(); ?>
    <div id="content" class="clearfix row authorarea">
        <div id="main" class="span8 clearfix" role="main">
            <?php 
                $curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
            ?>

            <!-- main info block on top -->
            <!-- main info block on top -->
            <!-- main info block on top -->

            <div class="page_header">
                <h1><?php echo $curauth->display_name ?></h1>
            </div>
            <div class="row">
                <div class="span4">
                    <a href="#" class="thumbnail">
                        <img src="<?php echo $curauth->author_image; ?>" alt="<?php echo $curauth->display_name?>">
                    </a>
                </div>
                <div class="span4">
                    <div class="authorinfobox">
                        <h5>Kontakt</h5>
                        <?php if (get_the_author_meta("user_email")) { ?>
                            <div class="author-email author-info">
                                E-Mail: <a href="mailto:<?php echo $curauth->user_email; ?>"><?php echo $curauth->user_email; ?></a><br>
                            </div>
                        <?php } ?>
                        <?php if (get_the_author_meta("telephone")) { ?>
                            <div class="author-telephone author-info">
                                Telefon: <?php echo $curauth->telephone; ?></a>
                            </div>
                        <?php } ?>
                        <?php if (get_the_author_meta("telefax")) { ?>
                            <div class="author-telefax author-info">
                                Telefax: <?php echo $curauth->telefax; ?></a>
                            </div>
                        <?php } ?>
                    </div>
                    <?php if ( ($curauth->user_tw) || ($curauth->user_fb) ) { ?>
                    <div class="authorinfobox">
                        <h5>Social Media</h5>
                            <?php if ($curauth->user_tw) { ?>
                                    <a href="<?php echo $curauth->user_tw; ?>"><img src="<?php bloginfo('template_directory') ?>/images/icons/twitter-32x32.png" title="twitter"></a>
                            <?php } ?>
                            <?php if (get_the_author_meta("user_fb")) { ?>
                                    <a href="<?php echo $curauth->user_fb; ?>"><img src="<?php bloginfo('template_directory') ?>/images/icons/facebook-32x32.png" title="facebook"></a>
                            <?php } ?>
                    </div>
                    <?php } ?>

                    <?php if ( ($curauth->mitarbeiter) ) {
                        $mitarbeiter = get_user_by('id', $curauth->mitarbeiter);
                    ?>
                    <div class="authorinfobox">
                        <h5>Kontakt/Mitarbeiter</h5>
                            <a href="/author/<?php echo $mitarbeiter->user_login; ?>"><?php echo $mitarbeiter->display_name ?></a>
                        <?php } ?>
                    </div>

                    <?php if ( ($curauth->ausschuesse) ) {
                        // return a list of ausschuesse with trimmed strings
                        function trim_value(&$value) { $value = trim($value); }
                        $ausschuesse = explode(",", $curauth->ausschuesse);
                        array_walk($ausschuesse, 'trim_value');
                    ?>
                        <div class="authorinfobox">
                            <h5>Aussch&uuml;sse</h5>
                                <ul class="author-ausschuesse">
                                <?php 
                                    foreach ($ausschuesse as $ausschuss) { 
                                        $term = get_term_by( 'slug', $ausschuss, "ausschuss" );
                                        echo '<li><a class="" href="'.get_term_link($term->slug, 'ausschuss').'">'.$term->name.'</a></li>';
                                    }
                                ?>
                                </ul>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="row">
                <div class="span8">
                    <hr>
                    <p class="lead">
                        <?php echo $curauth->description ?>
                    </p>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="span4">
                    <h3>Letzte Artikel</h3>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
                        <header>
                            <h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                            <p class="meta"><time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time></p>
                        
                        </header> <!-- end article header -->
                    
                        <section class="post_content">
                            <?php the_excerpt(); ?>
                        </section> <!-- end article section -->
                        <footer>
                        </footer> <!-- end article footer -->
                    </article> <!-- end article -->
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
                    <?php endwhile; ?>  
                    <?php else : ?>
                        Bislang noch keine Artikel.
                    <?php endif; ?> 
                </div>
                <div class="span4">
                    <h3>Letzte Kommentare</h3>
                    <?php 
                        $args = array( 'user_id' => $curauth->ID, 'number' => 20);
                        $comments = get_comments($args);
                        if (count($comments) > 0) {
                            foreach($comments as $comment) :
                                $output = '<ul class="author-recentcomments">';
                                $output .=  '<li class="recentcomments"> am ' . get_comment_date('m.d.Y', $comment->comment_ID) . ' bei <a href="' . esc_url( get_comment_link($comment->comment_ID) ) . '">' . get_the_title($comment->comment_post_ID) . '</a>' . '</li>';
                                $output .= "</ul>";
                            endforeach;
                            echo $output;
                    ?>
                    <?php } ?>
                </div>
            </div>
        </div> <!-- end #main -->
        <div id="sidebar-author" class="sidebar span3" role="complementary">
            <h2>Die Fraktion</h2>
            <h3>Vorstand</h3>
            <h3>Mitglieder</h3> 
        </div>

    </div> <!-- end #content -->

<?php get_footer(); ?>
