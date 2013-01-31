<?php
/*
The comments page for Bones
*/

// Do not delete these lines
  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

  if ( post_password_required() ) { ?>
    <div class="alert alert-info"><?php _e("This post is password protected. Enter the password to view comments.","bonestheme"); ?></div>
  <?php
    return;
  }
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
    <?php if ( ! empty($comments_by_type['comment']) ) : ?>
    <h3 id="comments"><?php comments_number('<span>' . __("No","bonestheme") . '</span> ' . __("Responses","bonestheme") . '', '<span>' . __("One","bonestheme") . '</span> ' . __("Response","bonestheme") . '', '<span>%</span> ' . __("Responses","bonestheme") );?> <?php _e("to","bonestheme"); ?> &#8220;<?php the_title(); ?>&#8221;</h3>

    <nav id="comment-nav">
        <ul class="clearfix">
            <li><?php previous_comments_link( __("Older comments","bonestheme") ) ?></li>
            <li><?php next_comments_link( __("Newer comments","bonestheme") ) ?></li>
        </ul>
    </nav>
    
    <ul class="commentlist media-list">
        <?php wp_list_comments(
            array(  'type' => 'comment', 
                    'callback' => 'bones_comments', 
                    'walker' => new PPCommentWalker)); ?>

    </ul>
    
    <?php endif; ?>
    
    <?php if ( ! empty($comments_by_type['pings']) ) : ?>
        <h3 id="pings">Trackbacks/Pingbacks</h3>
        
        <ol class="pinglist">
            <?php wp_list_comments('type=pings&callback=list_pings'); ?>
        </ol>
    <?php endif; ?>
    
    <nav id="comment-nav">
        <ul class="clearfix">
            <li><?php previous_comments_link( __("Older comments","bonestheme") ) ?></li>
            <li><?php next_comments_link( __("Newer comments","bonestheme") ) ?></li>
        </ul>
    </nav>
  
    <?php else : // this is displayed if there are no comments so far ?>

    <?php if ( comments_open() ) : ?>
        <!-- If comments are open, but there are no comments. -->

    <?php else : // comments are closed 
    ?>
    
    <?php
        $suppress_comments_message = of_get_option('suppress_comments_message');

        if (is_page() && $suppress_comments_message) :
    ?>
            
        <?php else : ?>
        
            <!-- If comments are closed. -->
            <p class="alert alert-info"><?php _e("Comments are closed","bonestheme"); ?>.</p>
            
        <?php endif; ?>

    <?php endif; ?>

<?php endif; ?>


<?php if ( comments_open() ) : ?>

<section id="respond" class="respond-form">

    <div id="cancel-comment-reply">
        <p class="small"><?php cancel_comment_reply_link( __("Cancel","bonestheme") ); ?></p>
    </div>

    <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
    <div class="help">
        <p><?php _e("You must be","bonestheme"); ?> <a href="<?php echo wp_login_url( get_permalink() ); ?>"><?php _e("logged in","bonestheme"); ?></a> <?php _e("to post a comment","bonestheme"); ?>.</p>
    </div>
    <?php else : ?>

    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" class="form-vertical" id="commentform">

        <?php 
            $args = array(
                'id_form' => 'commentform',
                'id_submit' => 'submit',
                'title_reply' => __( 'Leave a Reply' ),
                'title_reply_to' => __( 'Leave a Reply to %s' ),
                'cancel_reply_link' => __( 'Cancel Reply' ),
                'label_submit' => __( 'Post Comment' ),
                'comment_field' => '<div class="clearfix comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><div class="input"><textarea class="span5" id="comment" name="comment" cols="80" rows="5" placeholder="Dein Kommentar hier!" aria-required="true"></textarea></div></div>',
                'must_log_in' => '<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
                'logged_in_as' => '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
                'comment_notes_before' => '<p class="comment-notes">' . __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) . '</p>',
                'comment_notes_after' => '<p class="form-allowed-tags">' . sprintf( __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s' ), ' <code>' . allowed_tags() . '</code>' ) . '</p>',
                'fields' => apply_filters( 'comment_form_default_fields', array(
                    'author' => '<div class="control-group comment-form-author">' . '<label for="author">' . __( 'Name', 'domainreference' ) .  ( $req ? ' (notwendig)' : '' ) .  '</label> ' .  '<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span><input placeholder="Dein Name" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div></div>',
                    'email' => '<div class="control-group comment-form-email">' . '<label for="email">' . __( 'Email', 'domainreference' ) .  ( $req ? ' (notwendig)' : '' ) .  '</label> ' .  '<div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span><input placeholder="Deine E-Mail" id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div></div>',
                    'url' => '<div class="control-group comment-form-url">' . '<label for="url">' . __( 'Website', 'domainreference' ) . '</label> ' .  '<div class="input-prepend"><span class="add-on"><i class="icon-home"></i></span><input placeholder="Deine Homepage" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30"' . $aria_req . ' /></div></div>') ) );
        
            comment_form($args); 
        ?>
    </form>
    
    <?php endif; // If registration required and not logged in ?>
</section>

<?php endif; // if you delete this the sky will fall on your head ?>
