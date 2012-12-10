<?php get_header(); ?>
    <div class="page-header underline">
        <h1>Politik</h1>
    </div>

    <div id="content" class="row content-politik">
        <div class="span4">
            <h2>Gesetzesentwürfe</h2>
            <?php query_posts( 'cat=57&showposts=3' ); 
                  get_template_part('content', 'catlist');
            ?>
            <a class="btn btn-primary btn-mini btn-block" href="<?php echo esc_url(get_category_link( 57 )); ?>">Alle Gesetzesentwürfe</a>
        </div>
        <div class="span4">
            <h2>Änderungsanträge</h2>
            <?php query_posts( 'cat=58&showposts=3' ); 
                  get_template_part('content', 'catlist');
            ?>
            <a class="btn btn-primary btn-mini btn-block" href="<?php echo esc_url(get_category_link( 58 )); ?>">Alle Änderungsanträge</a>
        </div>
        <div class="span4">
            <h2>Entschlie&szlig;ungsanträge</h2>
            <?php query_posts( 'cat=56&showposts=3' ); 
                  get_template_part('content', 'catlist');
            ?>
            <a class="btn btn-primary btn-mini btn-block" href="<?php echo esc_url(get_category_link( 56 )); ?>">Alle Entschlie&szlig;ungsanträge</a>
        </div>
    </div>
    <hr>
    <div class="clearfix row content-politik" style="margin-top: 30px;">
        <div class="span4">
            <h2>Gro&szlig;e Anfragen</h2>
            <?php query_posts( 'cat=55&showposts=3' ); 
                  get_template_part('content', 'catlist');
            ?>
            <a class="btn btn-primary btn-mini btn-block" href="<?php echo esc_url(get_category_link( 55 )); ?>">Alle gro&szlig;en Anfragen</a>
        </div>
        <div class="span4">
            <h2>Kleine Anfragen</h2>
            <?php query_posts( 'cat=23&showposts=3' ); 
                  get_template_part('content', 'catlist');
            ?>
            <a class="btn btn-primary btn-mini btn-block" href="<?php echo esc_url(get_category_link( 23 )); ?>">Alle kleinen Anfragen</a>
        </div>
        <div class="span4">
            <h2>Plenum</h2>
            <?php query_posts( 'cat=139&showposts=3' ); 
                  get_template_part('content', 'catlist');
            ?>
            <a class="btn btn-primary btn-mini btn-block" href="<?php echo esc_url(get_category_link( 139 )); ?>">Alle Artikel zum Plenum</a>
        </div>
    </div>
    <hr>
    <div class="row" style="margin-top: 30px;">
        <div class="span4">
            <a href="/antragsfabrik/" class="btn btn-block btn-primary btn-large">zur Antragsfabrik</a>
        </div>
        <div class="span4">
            <h2>Beschlüsse der Fraktion</h2>
            <?php query_posts( 'cat=54&showposts=3' ); 
                  get_template_part('content', 'catlist');
            ?>
            <a class="btn btn-primary btn-mini btn-block" href="<?php echo esc_url(get_category_link( 54 )); ?>">Alle Beschlüsse der Fraktion</a>
        </div>
        <div class="span4">
            <a href="/wp-content/uploads/2012/12/WahlprogrammNRW2012_Basis_V2_PrintA5.pdf" class="btn btn-block btn-primary btn-large">Wahlprogramm</a>
        </div>
    </div>
<?php get_footer(); ?>
