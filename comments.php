<?php 
    if ( post_password_required() )
    return;
?>
 
<div id="comments" class="comments-area">
 
    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
                printf( _nx( 'One comment', '%1$s comments', get_comments_number(), 'mayur' ),
                    number_format_i18n( get_comments_number() ) );
            ?>
        </h2>
 
        <ul class="comment-list">
            <?php
                wp_list_comments( array(
                    'short_ping'  => true,
                    'avatar_size' => 45,
                    'reverse_top_level' => true,
                    'per_page' => 5
                ) );
            ?>
        </ul><!-- .comment-list -->
 
        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 || get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'mayur' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&amp;larr; Older Comments', 'mayur' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &amp;rarr;', 'mayur' ) ); ?></div>
        </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>
 
        <?php if ( ! comments_open() ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.' , 'mayur' ); ?></p>
        <?php endif; ?>
 
    <?php endif; // have_comments() ?>
 
    <?php 
        $comments_args = array(
        // Change the title of send button 
        'label_submit' => __( 'Post Comment', 'textdomain' ),
        // Change the title of the reply section
        'title_reply' => __( 'Write a Reply or Comment', 'textdomain' ),
        // Remove "Text or HTML to be displayed after the set of comment fields".
        'comment_notes_after' => '',
        // fields
        'fields' => array(
            'author' => '<p class="comment-form-author"><input id="author" name="author" type="text" value="" size="30" maxlength="245" required="required" placeholder="Name:*"></p>',
            'email' => '<p class="comment-form-email"><input id="email" name="email" type="text" value="" size="30" maxlength="245" required="required" placeholder="Email:*"></p>'
        ),
        // Redefine textarea (the comment body).
        'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="Comment:"></textarea></p>',
        );
        comment_form( $comments_args );
    ?>
 
</div><!-- #comments -->