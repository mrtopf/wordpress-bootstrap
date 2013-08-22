<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
    <header>
        <h4 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
    </header> <!-- end article header -->
    <section class="post_content">
        <?php the_excerpt(); ?>
    </section> <!-- end article section -->
    <?php /*
    <footer>
        <p class="meta"><time datetime="<?php echo the_time('Y-m-j'); ?>"><?php the_date(); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?></p>
    </footer> <!-- end article footer -->
    */ ?>
</article> <!-- end article -->
<?php endwhile; ?>  
<?php endif; ?>  
