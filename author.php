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
                <small>
                <?php if ($curauth->is_mdl) { ?>
                    Mitglied des Landtags Nordrhein-Westfalen<br>
                <?php } ?>
                </small>
            </div>
            <div class="row">
                <?php if ($curauth->author_image) { ?>
                <div class="span3">
                    <a href="#" class="thumbnail">
                        <img src="/wp-content/uploads/autoren/<?php echo $curauth->author_image; ?>.jpg" alt="<?php echo $curauth->display_name?>">
                    </a>
                </div>
                <?php } ?>
                <div class="span5">
                    <div class="authorinfobox">
                        <?php if ($curauth->user_url) { ?>
                            <div class="author-url author-info">
                                Homepage: <a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a><br>
                            </div>
                        <?php } ?>
                        <?php if ( ($curauth->user_email) && ($curauth->is_mdl)) { ?>
                            <div class="author-email author-info">
                                E-Mail: <a href="mailto:<?php echo $curauth->user_email; ?>"><?php echo $curauth->user_email; ?></a><br>
                            </div>
                        <?php } ?>
                        <?php if ($curauth->telefon) { ?>
                            <div class="author-telephone author-info">
                                Telefon: <?php echo $curauth->telefon; ?></a>
                            </div>
                        <?php } ?>
                        <?php if ($curauth->telefax) { ?>
                            <div class="author-telefax author-info">
                                Telefax: <?php echo $curauth->telefax; ?></a>
                            </div>
                        <?php } ?>
                    </div>
                    <?php if ( ($curauth->user_tw) || ($curauth->user_fb) || ($curauth->identica)) { ?>
                    <div class="authorinfobox">
                        <h5>Social Media</h5>
                        <?php if ($curauth->user_tw) { ?>
                                <a href="<?php echo $curauth->user_tw; ?>"><img src="<?php bloginfo('template_directory') ?>/images/icons/twitter-32x32.png" title="twitter"></a>
                        <?php } ?>
                        <?php if (get_the_author_meta("user_fb")) { ?>
                                <a href="<?php echo $curauth->user_fb; ?>"><img src="<?php bloginfo('template_directory') ?>/images/icons/facebook-32x32.png" title="facebook"></a>
                        <?php } ?>
                        <?php if ($curauth->identica) { ?>
                                <a href="<?php echo $curauth->identica; ?>"><img src="<?php bloginfo('template_directory') ?>/images/icons/identica-32x32.png" title="identica"></a>
                        <?php } ?>
                    </div>
                    <?php } ?>

                    <?php if ( ($curauth->mitarbeiter) ) {
                        $mitarbeiter = get_user_by('id', $curauth->mitarbeiter);
                    ?>
                    <div class="authorinfobox hide">
                        <h5>Mitarbeiter</h5>
                            <a href="/author/<?php echo $mitarbeiter->user_login; ?>"><?php echo $mitarbeiter->display_name ?></a>
                    </div>
                        <?php } ?>

                    <?php if ( ($curauth->funktionen) ) {
                        $funktionen = explode("\n", $curauth->funktionen);
                    ?>
                        <div class="authorinfobox">
                            <h5>Funktionen</h5>
                                <ul class="author-funktionen">
                                <?php 
                                    foreach ($funktionen as $funktion) { 
                                        echo "<li>".$funktion."</li>";
                                    }
                                ?>
                                </ul>
                        </div>
                    <?php } ?>
                </div>
            </div>

	    <?php if ( ($curauth->description) ) { ?>
	    <div class="row">
	    	<div class="span7">
		    <h5>Statement</h5>
		    <blockquote>
		    	<?php echo $curauth->description; ?>
		    </blockquote>
		</div>
	    </div>
	    <?php } ?>


            <hr>

            <div class="row">
                <div class="span5">
                    <h3>Letzte Artikel</h3>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
                        <header>
                            <h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                            <p class="meta"><time datetime="<?php echo the_time('d.m.Y'); ?>" pubdate><?php the_date(); ?></time></p>
                        
                        </header> <!-- end article header -->
                    
                        <section class="post_content">
                            <?php the_excerpt(); ?>
                        </section> <!-- end article section -->
                        <footer>
                        </footer> <!-- end article footer -->
                    </article> <!-- end article -->
                    <?php endwhile; ?>  
                    <?php else : ?>
                        Bislang noch keine Artikel.
                    <?php endif; ?> 
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
                </div>
                <div class="span3">
                    <h3>Kommentare</h3>
                    <?php 
                        $args = array( 'user_id' => $curauth->ID, 'number' => 20);
                        $comments = get_comments($args);
                        if (count($comments) > 0) {
                            foreach($comments as $comment) :
                                $output = '<ul class="author-recentcomments">';
                                $output .=  '<li class="recentcomments"> am ' . get_comment_date('d.m.Y', $comment->comment_ID) . ' bei <a href="' . esc_url( get_comment_link($comment->comment_ID) ) . '">' . get_the_title($comment->comment_post_ID) . '</a>' . '</li>';
                                $output .= "</ul>";
                            endforeach;
                            echo $output;
                    ?>
                    <?php } else { ?>
                        Bislang noch keine Kommentare.
                    <?php } ?>
                </div><!-- span2-->
            </div><!-- row -->
        </div> <!-- end #main -->

	<?php get_sidebar("author"); // sidebar 1 ?>

    </div> <!-- end #content -->

<?php get_footer(); ?>
