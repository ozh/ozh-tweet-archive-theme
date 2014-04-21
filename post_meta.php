<?php

/**
 * Template part: the <p class="meta">..</p> under each post
 */

?>
<p class="meta">
    <?php if( is_single() ) { ?>
        From <?php do_action( 'ozh_ta_source'); ?>
    <?php } ?>
    <?php do_action( 'ozh_ta_in_reply_to_tweet' ) ?>
    <?php if( ozh_ta_is_reply_or_not( false ) == 'is_reply' ) { ?>
        &mdash;
    <?php } ?>
    <?php the_time('g:ia M j Y') ?>
    &mdash; <a href="<?php do_action( 'ozh_ta_tweet_link' ); ?>" title="Original on Twitter"><i class="fa fa-twitter"></i></a>
    <a href="<?php the_permalink() ?>" title="Permalink" rel="bookmark">&#0182;</a>
    <?php edit_post_link('edit', '', ''); ?>
</p>
