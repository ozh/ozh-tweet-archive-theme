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

function otat_month_archives() {
    global $wpdb;
    $where = "WHERE post_type = 'post' AND post_status = 'publish'";
    $query = "SELECT YEAR(post_date) AS `year`, MONTH(post_date) AS `month`, count(ID) as posts FROM $wpdb->posts $where GROUP BY YEAR(post_date), MONTH(post_date) ORDER BY YEAR DESC, MONTH ASC";
    $_archive = $wpdb->get_results( $query );

    $last_year  = (int) $_archive[0]->year;
    $first_year = (int) $_archive[ count( $_archive ) - 1 ]->year;

    $archive    = array();
    $max        = 0;
    $year_total = array();
    
    foreach( $_archive as $data ) {
        if( !isset( $year_total[ $data->year ] ) ) {
            $year_total[ $data->year ] = 0;
        }
        $archive[ $data->year ][ $data->month ] = $data->posts;
        $year_total[ $data->year ] += $data->posts;
        $max = max( $max, $data->posts );
    }
    unset( $_archive );

    for ( $year = $last_year; $year >= $first_year; $year-- ) {
        echo '<div class="archive_year">';
        echo '<span class="archive_year_label">' . $year;
        if( isset( $year_total[$year] ) ) {
            echo '<span class="archive_year_count">' . $year_total[$year] . ' tweets</span>';
        }
        echo '</span>';
        echo '<ol>';
        for ( $month = 1; $month <= 12; $month++ ) {
            $num = isset( $archive[ $year ][ $month ] ) ? $archive[ $year ][ $month ] : 0;
            $empty = $num ? 'not_empty' : 'empty';
            echo "<li class='$empty'>";
            $height = 100 - max( floor( $num / $max * 100 ), 20 );
            if( $num ) {
                $url = get_month_link( $year, $month );
                $m = str_pad( $month, 2, "0", STR_PAD_LEFT);
                echo "<a href='$url' title='$m/$year : $num tweets'><span class='bar_wrap'><span class='bar' style='height:$height%'></span></span>";
                echo "<span class='label'>" . $m . "</span>";
                echo "</a>";
            }
            echo '</li>';
        }
        echo '</ol>';
        echo "</div>";
    }
}

