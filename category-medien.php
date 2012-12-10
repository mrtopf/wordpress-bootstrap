<?php get_header(); ?>
    <div class="page-header underline">
        <h1>Medien</h1>
    </div>

    <div id="content" class="clearfix row">
        <div class="span6">
            <h2>Texte</h2>
            <?php query_posts( 'cat=79&showposts=3' ); 
                  get_template_part('content', 'catlist');
            ?>
            <a class="btn btn-primary btn-mini btn-block" href="<?php echo esc_url(get_category_link( 79 )); ?>">Alle Texte</a>
        </div>
        <div class="span6">
            <h2>Reden</h2>
            <?php query_posts( 'cat=80&showposts=3' ); 
                  get_template_part('content', 'catlist');
            ?>
            <a class="btn btn-primary btn-mini btn-block" href="<?php echo esc_url(get_category_link( 80 )); ?>">Alle Reden</a>
        </div>
    </div>
    <div class="clearfix row" style="margin-top: 30px;">
        <div class="span6">
            <h2>Bilder</h2>
            <?php query_posts( 'cat=81&showposts=30' ); 
                  get_template_part('content', 'catlist');
            ?>
            <a class="btn btn-primary btn-mini btn-block" href="<?php echo esc_url(get_category_link( 81 )); ?>">Alle Bilder</a>
        </div>
        <div class="span6">
            <h2>Logos</h2>
            <?php query_posts( 'cat=82&showposts=3' ); 
                  get_template_part('content', 'catlist');
            ?>
            <a class="btn btn-primary btn-mini btn-block" href="<?php echo esc_url(get_category_link( 82 )); ?>">Alle Logos</a>
        </div>
    </div>
<?php get_footer(); ?>
