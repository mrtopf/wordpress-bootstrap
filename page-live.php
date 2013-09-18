<?php
/*
Template Name: LIVE Page
*/
?>

<?php get_header(); ?>
            
            <div id="content" class="clearfix row-fluid">
                <div id="main" class="span10 clearfix" role="main">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
                        <header>
                            <div class="page-header"><h1><?php the_title(); ?></h1></div>
                        </header> <!-- end article header -->
                    
                        <section class="post_content">
                            <?php the_content(); ?>
                        </section> <!-- end article section -->
                        
                        <footer>
                            <p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","bonestheme") . ': ', ', ', '</span>'); ?></p>
                        </footer> <!-- end article footer -->
                    
                    </article> <!-- end article -->
                    <?php comments_template(); ?>
                    <?php endwhile; ?>  
                    
                    <?php else : ?>
                    
                    <article id="post-not-found">
                        <header>
                            <h1><?php _e("Not Found", "bonestheme"); ?></h1>
                        </header>
                        <section class="post_content">
                            <p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
                        </section>
                        <footer>
                        </footer>
                    </article>
                    
                    <?php endif; ?>
            
                </div> <!-- end #main -->
    
                <div id="sidebar1" class="fluid-sidebar sidebar span2" role="complementary">
                    <?php
// draft sample display for array returned from oAuth Twitter Feed for Developers WP plugin
// http://wordpress.org/extend/plugins/oauth-twitter-feed-for-developers/

$tweets = getTweets(5);//change number up to 20 for number of tweets
if(is_array($tweets)){

// to use with intents
//echo '<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>';
?>
<h3>
<a href="http://twitter.com/20piraten" target="twitter" class="pull-right btn btn-mini"><i class="icon-twitter"></i> folgen</a>
Tweets
</h3>

<?php

foreach($tweets as $tweet){

    if($tweet['text']){
        $the_tweet = $tweet['text'];
        /*
        Twitter Developer Display Requirements
        https://dev.twitter.com/terms/display-requirements

        2.b. Tweet Entities within the Tweet text must be properly linked to their appropriate home on Twitter. For example:
          i. User_mentions must link to the mentioned user's profile.
         ii. Hashtags must link to a twitter.com search with the hashtag as the query.
        iii. Links in Tweet text must be displayed using the display_url
             field in the URL entities API response, and link to the original t.co url field.
        */

        // i. User_mentions must link to the mentioned user's profile.
        if(is_array($tweet['entities']['user_mentions'])){
            foreach($tweet['entities']['user_mentions'] as $key => $user_mention){
                $the_tweet = preg_replace(
                    '/@'.$user_mention['screen_name'].'/i',
                    '<a href="http://www.twitter.com/'.$user_mention['screen_name'].'" target="_blank">@'.$user_mention['screen_name'].'</a>',
                    $the_tweet);
            }
        }

        // ii. Hashtags must link to a twitter.com search with the hashtag as the query.
        if(is_array($tweet['entities']['hashtags'])){
            foreach($tweet['entities']['hashtags'] as $key => $hashtag){
                $the_tweet = preg_replace(
                    '/#'.$hashtag['text'].'/i',
                    '<a href="https://twitter.com/search?q=%23'.$hashtag['text'].'&src=hash" target="_blank">#'.$hashtag['text'].'</a>',
                    $the_tweet);
            }
        }

        // iii. Links in Tweet text must be displayed using the display_url
        //      field in the URL entities API response, and link to the original t.co url field.
        if(is_array($tweet['entities']['urls'])){
            foreach($tweet['entities']['urls'] as $key => $link){
                $the_tweet = preg_replace(
                    '`'.$link['url'].'`',
                    '<a href="'.$link['url'].'" target="_blank">'.$link['url'].'</a>',
                    $the_tweet);
            }
        }

        echo '<div class="tweet">'.$the_tweet.'</div>';

        // 3. Tweet Actions
        //    Reply, Retweet, and Favorite action icons must always be visible for the user to interact with the Tweet. These actions must be implemented using Web Intents or with the authenticated Twitter API.
        //    No other social or 3rd party actions similar to Follow, Reply, Retweet and Favorite may be attached to a Tweet.
        // get the sprite or images from twitter's developers resource and update your stylesheet
        echo '
        <div class="twitter_intents">
            <p><a class="reply" href="https://twitter.com/intent/tweet?in_reply_to='.$tweet['id_str'].'"><i class="icon-reply"></i></a></p>
            <p><a class="retweet" href="https://twitter.com/intent/retweet?tweet_id='.$tweet['id_str'].'"><i class="icon-retweet"></i></a></p>
            <p><a class="favorite" href="https://twitter.com/intent/favorite?tweet_id='.$tweet['id_str'].'"><i class="icon-star"></i></a></p>
        </div>';


        // 4. Tweet Timestamp
        //    The Tweet timestamp must always be visible and include the time and date. e.g., “3:00 PM - 31 May 12”.
        // 5. Tweet Permalink
        //    The Tweet timestamp must always be linked to the Tweet permalink.
        echo '
        <p class="twitter_timestamp">
            <a href="https://twitter.com/YOURUSERNAME/status/'.$tweet['id_str'].'" target="_blank">
                '.date('h:i A M d',strtotime($tweet['created_at']. '- 8 hours')).'
            </a>
        </p>';// -8 GMT for Pacific Standard Time
    } else {
        echo '
        <br /><br />
        <a href="http://twitter.com/YOURUSERNAME" target="_blank">Click here to read YOURUSERNAME\'S Twitter feed</a>';
    }
}
}

                    ?>
                </div>
    
            </div> <!-- end #content -->

<?php get_footer(); ?>
