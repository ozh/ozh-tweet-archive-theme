<div id="sidebar">

<?php get_search_form(); ?>

  <div id="nav">
  
    <h2><i class="fa fa-calendar"></i> Archives</h2>
	<?php /**/ ?>
    <div id='archives'>
    <?php otat_month_archives(); ?>
	</div>
	<?php /**/ ?>
	
	<h2><i class="fa fa-dashboard"></i> Stats</h2>
	<?php /**/ ?>
	<ul id="stats" class="block">
	<li class="stats">Tweets <span class="count"><?php do_action('ozh_ta_total_tweets'); ?></span></li>
	<li class="stats">Followers <span class="count"><?php do_action('ozh_ta_total_followers'); ?></span></li>
	<li class="stats">Following <span class="count"><?php do_action('ozh_ta_total_following'); ?></span></li>
	<li class="stats">Listed <span class="count"><?php do_action('ozh_ta_total_listed'); ?></span></li>
	<li class="stats">Link ratio <span class="count"><?php do_action('ozh_ta_link_ratio'); ?></span></li>
	<li class="stats">Reply ratio <span class="count"><?php do_action('ozh_ta_reply_ratio'); ?></span></li>
	<li class="stats">Tweeting since <span class="count"><?php do_action('ozh_ta_tweeting_since'); ?></span></li>
	</ul>
	<?php /**/ ?>

	<h2><i class="fa fa-tags"></i> #hashtags</h2>
	<?php wp_tag_cloud('format=list'); ?>
	
	<h2><i class="fa fa-info-circle"></i> Bleh</h2>
	<ul id="bleh" class="block">
	<li>Tweets archive every <span class="count"><?php global $ozh_ta; echo ozh_ta_seconds_to_words( $ozh_ta['refresh_interval'] ); ?></span></li>
	<li>Next update in <span class="count"><?php echo ozh_ta_next_update_in( true, false ); ?></span></li>
	<li><a href="<?php bloginfo('url'); ?>/wp-admin/">Admin</a></li>
	<li><?php wp_loginout(); ?></li>
	</ul>


  <?php //endif; // no dynamic sidebar?>
	
  </div>

</div>

