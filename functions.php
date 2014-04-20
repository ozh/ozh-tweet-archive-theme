<?php

if ( function_exists('register_sidebar') )
    register_sidebar();

add_action( 'wp_enqueue_scripts', function(){ wp_enqueue_script( 'jquery' ); } );

function otat_get_tweet_style() {
    $title    = strlen( get_the_title() );
    $is_reply = ozh_ta_is_reply_or_not( false );
    if( $title > 100 ) {
        $style = 'long';
    } elseif ( $title > 50 ) {
        $style = 'medium';
    } else {
        $style = 'short';
    }
    return "$style $is_reply";
}


