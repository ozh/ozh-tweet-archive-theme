<?php
/**
 * Template part : Stream toggle -- to toggle between "Tweets" and "Tweets with replies", like Twitter does
 *
 * To use this feature, you need to create two empty pages : name one "tweets", the second one "with replies"
 * Then, under Settings / Reading, pick the option "Front page displays : a Static Page", and select the
 * following pages :
 *     - Front page : "tweets"
 *     - Posts page : "with replies"
 *
 */
?>
<div id="stream_toggle">
<ul>
    <li>
        <?php
        if( is_front_page() ) {
            $html_home = '<span>Tweets</span>';
        } else {
            $html_home = '<a href="' . get_home_url() . '">Tweets</a>';
        }
        echo $html_home;
        ?>
    </li>
    <li>
        <?php
        global $pagename;
        if( $pagename == get_page_uri( get_option( 'page_for_posts' ) ) ) {
            $html_with_replies = '<span>With Replies</span>';
        } else {
            $html_with_replies = '<a href="' . get_page_uri( get_option('page_for_posts') ) . '">With Replies</a>';
        }
        echo $html_with_replies;
        ?>
    </li>
</ul>
</div>
