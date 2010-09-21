<?php get_header(); ?>

<?php if (have_posts()) : ?>

<!-- !BEGIN #tweets -->
<div id="tweets">
<h2>Search results for <?php the_search_query(); ?> <?php if( $paged > 1 ) echo "&laquo; page $paged"; ?></h2>

<?php while (have_posts()) : the_post(); ?>
  <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <div class="tweet">
      <?php the_content(); ?>
    </div>
    <p class="meta"><?php do_action( 'ozh_ta_in_reply_to_tweet' ) ?> <?php the_time('g:ia M j Y') ?> <a href="<?php do_action( 'ozh_ta_tweet_link' ); ?>" title="Original on Twitter">#</a> <a href="<?php the_permalink() ?>" title="Permalink" rel="bookmark">&#0182;</a> <?php edit_post_link('edit', '', ''); ?></p>
  </div>

<?php endwhile; ?>
</div>
<!-- END #tweets -->

<div class="pagination">
	<div class="older"><?php next_posts_link('&laquo; Older tweets') ?></div>
	<div class="newer"><?php previous_posts_link('Newer tweets &raquo;') ?></div>
</div>

<?php else : ?>

<h2>No posts found. Try a different search.</h2>

<?php endif; ?>

<?php get_footer(); ?>
