<?php get_header(); ?>

<?php if (have_posts()) : ?>

<!-- !BEGIN #tweets -->
<div id="tweets">
<h2>Search results for &laquo;<?php the_search_query(); ?>&raquo; <?php if( $paged > 1 ) echo "&laquo; page $paged"; ?></h2>

<?php while (have_posts()) : the_post(); ?>
  <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <div class="tweet">
      <?php the_content(); ?>
    </div>
    <?php get_template_part( 'post_meta' ); ?>
  </div>

<?php endwhile; ?>

    <div class="pagination">
        <div class="older"><?php next_posts_link('&laquo; Older tweets') ?></div>
        <div class="newer"><?php previous_posts_link('Newer tweets &raquo;') ?></div>
    </div>

</div>
<!-- END #tweets -->

<?php else : ?>

<h2>No posts found. Try a different search.</h2>

<?php endif; ?>

<?php get_footer(); ?>
