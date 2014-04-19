<?php get_header(); ?>

<?php if (have_posts()) : ?>

<!-- !BEGIN #tweets -->
<div id="tweets">
<?php /* If this is a monthly archive */ if (is_month()) { ?>
<h2>Tweet Archive for <?php single_month_title( ' ' );; ?>
<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
<h2>Tweet Archive for <?php echo get_query_var('year'); ?>
<?php /* If this is a tag archive */ } elseif (is_tag()) { ?>
<h2>Tweet Archive for hashtag &#8220;#<?php single_tag_title(); ?>&#8221;
<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
<h2>Tweet Archives
<?php } 

 if( $paged > 1 ) echo " &laquo; page $paged";
?></h2>

<?php while (have_posts()) : the_post(); ?>
  <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <div class="tweet">
      <?php the_content() ?>
    </div>
    <p class="meta"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_time('g:ia j M Y') ?></a> <?php edit_post_link('edit', '', ''); ?></p>
  </div>

<?php endwhile; ?>

    <div class="pagination">
      <div class="older"><?php next_posts_link('&laquo; Older tweets') ?></div>
      <div class="newer"><?php previous_posts_link('Newer tweets &raquo;') ?></div>
    </div>

</div>
<!-- END #tweets -->

<?php else :

    if (is_date()) { // If this is a date archive
      echo "<h2>No posts found for this date</h2>";
    } else {
      echo "<h2>No posts found</h2>";
    }
    get_search_form();

  endif;
?>

<?php get_footer(); ?>
