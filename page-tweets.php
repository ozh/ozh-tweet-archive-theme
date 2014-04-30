<?php
/*
Template Name: My Custom Page
*/
?>
<?php get_header(); ?>

<?php
$paged = isset( $wp_query->query['paged'] ) ? $wp_query->query['paged'] : 1;

$args = array (
    'paged'=> $paged,
	'meta_query'     => array(
		array(
			'key'     => 'ozh_ta_reply_to_tweet',
			'compare' => 'NOT EXISTS',
		),
	),
);

query_posts( $args );
?>

<?php if (have_posts()) : ?>

<!-- !BEGIN #tweets -->
<div id="tweets">

<h2>Recent tweets <?php if( $paged > 1 ) echo "&laquo; page $paged"; ?></h2>

<?php while (have_posts()) : the_post(); ?>
  <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <div class="tweet <?php echo otat_get_tweet_style(); ?>">
        <?php the_content(); ?>
    </div>
    <?php get_template_part( 'post_meta' ); ?>
  </div>

<?php endwhile; ?>

    <div class="pagination">
        <div class="older"><?php next_posts_link('&laquo; Older tweets', $wp_query->max_num_pages) ?></div>
        <div class="newer"><?php previous_posts_link('Newer tweets &raquo;') ?></div>
    </div>

</div>
<!-- END #tweets -->
<?php 
// clean up after our query
wp_reset_query();
?>

<?php else : ?>

<h2>No posts found</h2>
<?php get_search_form(); ?>

<?php endif; ?>

<?php get_footer(); ?>
