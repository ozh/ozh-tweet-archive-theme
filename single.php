<?php get_header(); ?>

<?php if (have_posts()) : ?>

<!-- !BEGIN #tweet -->
<div id="tweets">
<?php while (have_posts()) : the_post(); ?>

  <h2>Tweet #<?php do_action( 'ozh_ta_id' ); ?></h2>
  <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <div class="tweet">
      <?php the_content(); ?>
    </div>
    <?php get_template_part( 'post_meta' ); ?>
  </div>

<?php endwhile; ?>

    <div class="pagination">
      <div class="older"><?php previous_post_link('%link', '&laquo; Previous tweet') ?></div>
      <div class="newer"><?php next_post_link('%link', 'Next tweet &raquo;') ?></div>
    </div>

</div>
<!-- END #tweet -->




<?php else: ?>

<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

<?php get_footer(); ?>
