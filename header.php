<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
        <title><?php if ( !is_front_page() ) { echo wp_title( ' ', true, 'left' ); echo ' | '; } echo bloginfo( 'name' ); echo ' - '; bloginfo( 'description', 'display' );  ?></title>
                
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        @font-face {
          font-family: 'FontAwesome';
          font-style: normal;
          font-weight: 400;
          src: url('/wp-content/themes/wordpress-bootstrap/font/fontawesome-webfont.eot?#iefix') format('embedded-opentype'), url('/wp-content/themes/wordpress-bootstrap/font/fontawesome-webfont.woff') format('woff'), url('/wp-content/themes/wordpress-bootstrap/font/fontawesome-webfont.ttf') format('truetype'), url('/wp-content/themes/wordpress-bootstrap/font/fontawesome-webfont.svg#FontAwesome') format('svg');
        }
        @font-face {
            font-family: 'lato_blackregular';
            src: url('/wp-content/themes/wordpress-bootstrap/font/lato-black-webfont.eot');
            src: url('/wp-content/themes/wordpress-bootstrap/font/lato-black-webfont.eot?#iefix') format('embedded-opentype'),
             url('/wp-content/themes/wordpress-bootstrap/font/lato-black-webfont.woff') format('woff'),
             url('/wp-content/themes/wordpress-bootstrap/font/lato-black-webfont.ttf') format('truetype'),
             url('/wp-content/themes/wordpress-bootstrap/font/lato-black-webfont.svg#lato_blackregular') format('svg');
            font-weight: normal;
            font-style: normal;
        }
        @font-face {
            font-family: 'PT Sans';
            src: url('/wp-content/themes/wordpress-bootstrap/font/pt_sans-web-bold-webfont.eot');
            src: url('/wp-content/themes/wordpress-bootstrap/font/pt_sans-web-bold-webfont.eot?#iefix') format('embedded-opentype'),
             url('/wp-content/themes/wordpress-bootstrap/font/pt_sans-web-bold-webfont.woff') format('woff'),
             url('/wp-content/themes/wordpress-bootstrap/font/pt_sans-web-bold-webfont.ttf') format('truetype'),
             url('/wp-content/themes/wordpress-bootstrap/font/pt_sans-web-bold-webfont.svg#pt_sansbold') format('svg');
            font-weight: bold;
            font-style: normal;

        }

        @font-face {
            font-family: 'PT Sans';
            src: url('/wp-content/themes/wordpress-bootstrap/font/pt_sans-web-bolditalic-webfont.eot');
            src: url('/wp-content/themes/wordpress-bootstrap/font/pt_sans-web-bolditalic-webfont.eot?#iefix') format('embedded-opentype'),
             url('/wp-content/themes/wordpress-bootstrap/font/pt_sans-web-bolditalic-webfont.woff') format('woff'),
             url('/wp-content/themes/wordpress-bootstrap/font/pt_sans-web-bolditalic-webfont.ttf') format('truetype'),
             url('/wp-content/themes/wordpress-bootstrap/font/pt_sans-web-bolditalic-webfont.svg#pt_sansbold_italic') format('svg');
            font-weight: bold;
            font-style: italic;

        }

        @font-face {
            font-family: 'PT Sans';
            src: url('/wp-content/themes/wordpress-bootstrap/font/pt_sans-web-italic-webfont.eot');
            src: url('/wp-content/themes/wordpress-bootstrap/font/pt_sans-web-italic-webfont.eot?#iefix') format('embedded-opentype'),
             url('/wp-content/themes/wordpress-bootstrap/font/pt_sans-web-italic-webfont.woff') format('woff'),
             url('/wp-content/themes/wordpress-bootstrap/font/pt_sans-web-italic-webfont.ttf') format('truetype'),
             url('/wp-content/themes/wordpress-bootstrap/font/pt_sans-web-italic-webfont.svg#pt_sansitalic') format('svg');
            font-weight: normal;
            font-style: italic;

        }

        @font-face {
            font-family: 'PT Sans';
            src: url('/wp-content/themes/wordpress-bootstrap/font/pt_sans-web-regular-webfont.eot');
            src: url('/wp-content/themes/wordpress-bootstrap/font/pt_sans-web-regular-webfont.eot?#iefix') format('embedded-opentype'),
             url('/wp-content/themes/wordpress-bootstrap/font/pt_sans-web-regular-webfont.woff') format('woff'),
             url('/wp-content/themes/wordpress-bootstrap/font/pt_sans-web-regular-webfont.ttf') format('truetype'),
             url('/wp-content/themes/wordpress-bootstrap/font/pt_sans-web-regular-webfont.svg#pt_sansregular') format('svg');
            font-weight: normal;
            font-style: normal;

        }
        @font-face {
            font-family: 'Oswald';
            src: url('/wp-content/themes/wordpress-bootstrap/font/oswald-light-webfont.eot');
            src: url('/wp-content/themes/wordpress-bootstrap/font/oswald-light-webfont.eot?#iefix') format('embedded-opentype'),
             url('/wp-content/themes/wordpress-bootstrap/font/oswald-light-webfont.woff') format('woff'),
             url('/wp-content/themes/wordpress-bootstrap/font/oswald-light-webfont.ttf') format('truetype'),
             url('/wp-content/themes/wordpress-bootstrap/font/oswald-light-webfont.svg#oswaldlight') format('svg');
            font-weight: light;
            font-style: normal;

        }




        @font-face {
            font-family: 'Oswald';
            src: url('/wp-content/themes/wordpress-bootstrap/font/oswald-regular-webfont.eot');
            src: url('/wp-content/themes/wordpress-bootstrap/font/oswald-regular-webfont.eot?#iefix') format('embedded-opentype'),
             url('/wp-content/themes/wordpress-bootstrap/font/oswald-regular-webfont.woff') format('woff'),
             url('/wp-content/themes/wordpress-bootstrap/font/oswald-regular-webfont.ttf') format('truetype'),
             url('/wp-content/themes/wordpress-bootstrap/font/oswald-regular-webfont.svg#oswaldregular') format('svg');
            font-weight: normal;
            font-style: normal;

        }


    </style>

        
        <!-- icons & favicons -->
        <!-- For iPhone 4 -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/pptouch114.png">
        <!-- For iPad 1-->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/pptouch72.png">
        <!-- For iPhone 3G, iPod Touch and Android -->
        <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/images/pptouch57.png">
        <!-- For Nokia -->
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/pptouch114.png">
        <!-- For everything else -->
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
                
        <!-- media-queries.js (fallback) -->
        <!--[if lt IE 9]>
            <script src="<?php echo get_template_directory_uri(); ?>/library/js/css3-mediaqueries.js"></script>           
        <![endif]-->

        <!-- html5.js -->
        <!--[if lt IE 9]>
            <script src="<?php echo get_template_directory_uri(); ?>/library/js/html5.js"></script>           
        <![endif]-->
        
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/less/bootstrap.less">
        <link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/less/responsive.less">

        <!-- wordpress head functions -->
        <?php wp_head(); ?>

        <!-- end of wordpress head -->

        <!-- theme options from options panel -->
        <?php get_wpbs_theme_options(); ?>

        <?php 

            // check wp user level
            get_currentuserinfo(); 
            // store to use later
            global $user_level; 
        ?>
                
    </head>
    
    <body <?php body_class(); ?>>
                
        <header role="banner">
        
            <div id="inner-header" class="clearfix">
                
                <div class="navbar navbar-fixed-top">
                    <div class="navbar-inner">
                        <div class="container nav-container">
                            <nav role="navigation">
                                <a class="brand" id="logo" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                            
                            <?php if(of_get_option('search_bar', '1')) {?>
                            <form class="navbar-search pull-right" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                                <input name="s" id="s" type="text" class="search-query" autocomplete="off" placeholder="<?php _e('Search','bonestheme'); ?>">
                            </form>
                            <?php } ?>
                            
                                
                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </a>
                                
                                <div class="menu-collapse nav-collapse collapse">
                                    <ul class="menu">   
                                    <li class="menu-item">
                                        <a title="Startseite" href="/"><i class="icon-home"></i></a>
                                    </li>
                                    </ul>
                                    <?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
                                </div>
                                
                            </nav>
                        </div>
                    </div>
                </div>
            
            </div> <!-- end #inner-header -->
        
        </header> <!-- end header -->
        
        <div class="container">
            <header id="socialmedia">
                <div id="socialmediaicons">
                    <a href="http://www.facebook.com/PiratenfraktionNRW" title="zur Facebookseite der Fraktion">
                        <img width="32" height="32" alt="Facebook-Icon" src="<?php echo get_template_directory_uri(); ?>/images/icons/facebook-32x32.png">
                    </a>
                    <a href="https://twitter.com/20piraten" title="zum Twitteraccount der Fraktion">
                        <img width="32" height="32" alt="Twitter-Icon" src="<?php echo get_template_directory_uri(); ?>/images/icons/twitter-32x32.png">
                    </a>
                    <a href="https://youtube.com/PiratenfraktionNRW" title="zum YouTube-Account der Fraktion">
                        <img width="32" height="32" alt="YouTube-Icon" src="<?php echo get_template_directory_uri(); ?>/images/icons/youtube-32x32.png">
                    </a>
                </div>
                <a title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>" class="logoimg">
                    <img alt="Piratenfraktion NRW" src="<?php echo get_template_directory_uri(); ?>/images/pp.png">
                </a>
            </header>
