<?php get_header(); ?>

<?php if (have_posts()) : ?>

<!-- !BEGIN #tweet -->
<div id="tweet">

<?php while (have_posts()) : the_post(); ?>

  <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <div class="tweet">
      <?php the_content(); ?>
    </div>
    <p class="meta">From <?php do_action( 'ozh_ta_source'); ?> <?php do_action( 'ozh_ta_in_reply_to_tweet') ?> <?php the_time('g:ia M j Y') ?> <a href="<?php do_action( 'ozh_ta_tweet_link'); ?>" title="Original on Twitter">#</a> <?php edit_post_link('edit', '', ''); ?></p>
  </div>

<?php endwhile; ?>
</div>
<!-- END #tweet -->

<div class="pagination">
  <div class="older"><?php previous_post_link('%link', '&laquo; Previous tweet') ?></div>
  <div class="newer"><?php next_post_link('%link', 'Next tweet &raquo;') ?></div>
</div>


<?php else: ?>

<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

<?php get_footer(); ?>
