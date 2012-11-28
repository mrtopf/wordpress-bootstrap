<?php get_header(); ?>
    <div class="page-header">
        <h1>Politik</h1>
    </div>

    <div id="content" class="clearfix row">
        <div class="span4">
            <h2>Kleine Anfragen</h2>
            <?php query_posts( 'cat=23' ); 
                  get_template_part('content', 'catlist');
            ?>
            <a class="btn btn-primary btn-mini btn-block" href="<?php echo esc_url(get_category_link( 23 )); ?>">Alle kleinen Anfragen</a>
        </div>
        <div class="span4">
            <h2>Grosse Anfragen</h2>
            <?php query_posts( 'cat=55' ); 
                  get_template_part('content', 'catlist');
            ?>
            <a class="btn btn-primary btn-mini btn-block" href="<?php echo esc_url(get_category_link( 55 )); ?>">Alle grossen Anfragen</a>
        </div>
        <div class="span4">
            <h2>Änderungsanträge</h2>
            <?php query_posts( 'cat=58' ); 
                  get_template_part('content', 'catlist');
            ?>
            <a class="btn btn-primary btn-mini btn-block" href="<?php echo esc_url(get_category_link( 58 )); ?>">Alle Änderungsanträge</a>
        </div>
    </div>
    <hr>
    <div class="clearfix row">
        <div class="span4">
            <h2>Entschliessungsanträge</h2>
            <?php query_posts( 'cat=56' ); 
                  get_template_part('content', 'catlist');
            ?>
            <a class="btn btn-primary btn-mini btn-block" href="<?php echo esc_url(get_category_link( 56 )); ?>">Alle Entschliessungsanträge</a>
        </div>
        <div class="span4">
            <h2>Gesetzesentwürfe</h2>
            <?php query_posts( 'cat=57' ); 
                  get_template_part('content', 'catlist');
            ?>
            <a class="btn btn-primary btn-mini btn-block" href="<?php echo esc_url(get_category_link( 57 )); ?>">Alle Gesetzesentwürfe</a>
        </div>
        <div class="span4">
            <h2>Protokolle</h2>
            <?php query_posts( 'cat=22' ); 
                  get_template_part('content', 'catlist');
            ?>
            <a class="btn btn-primary btn-mini btn-block" href="<?php echo esc_url(get_category_link( 22 )); ?>">Alle Protokolle</a>
        </div>
        <?php
        /*
        <div class="span3">
            <h2>Unsere Positionen</h2>
            <?php query_posts( 'cat=54' ); 
                  get_template_part('content', 'catlist');
            ?>
            <a class="btn btn-primary btn-mini btn-block" href="<?php echo esc_url(get_category_link( 54 )); ?>">Alle unsere Positionen</a>
        </div>
        <div class="span3">
            <h2>Themen</h2>
            <?php query_posts( 'cat=8' ); ?>
            Hier geht es zum Themenportal, wo Du alle Dokumente, Protokolle, Artikel und weiteres nach Themen geordnet findest.
            <a class="btn btn-primary btn-large btn-block" href="<?php echo esc_url(get_category_link( 8 )); ?>">Zum Themenportal</a>
        </div>
        */ ?>
    </div>
<?php get_footer(); ?>
