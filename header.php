<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/font-awesome.min.css" type="text/css" media="screen" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="header">
<a href="<?php bloginfo('url'); ?>" title="Back home"></a>
</div>

<div id="stats-wrap">
    <ul id="stats-header">
        <li id="tiny-name">Ozh <a href="https://twitter.com/ozh">@ozh</a></li>
        <li><span class="what">tweets</span><span class="much"><?php do_action('ozh_ta_total_tweets'); ?></span></li>
        <li><span class="what">following</span><span class="much"><?php do_action('ozh_ta_total_following'); ?> <a href="https://twitter.com/ozh/following"><i class="fa fa-caret-right"></i></a></span></li>
        <li><span class="what">followers</span><span class="much"><?php do_action('ozh_ta_total_followers'); ?> <a href="https://twitter.com/ozh/followers"><i class="fa fa-caret-right"></i></a></span></li>
        <li><span class="what">listed</span><span class="much"><?php do_action('ozh_ta_total_listed'); ?> <a href="https://twitter.com/ozh/memberships"><i class="fa fa-caret-right"></i></a></span></li>
    </ul>
</div>

<!-- !BEGIN #container -->
<div id="container">

<!-- !BEGIN #content -->
<div id="content">

<!-- !BEGIN #user -->
<div id="user">
    <div id="user-pic">
        <a href="https://twitter.com/ozh" class="avatar"></a>
    </div>
    <div id="user-info">
        <ul>
            <li class="user-realname">Ozh RICHARD</li>
            <li class="username"><i class="fa fa-twitter"></i>@<a href="https://twitter.com/ozh">ozh</a></li>
            <li class="username"><i class="fa fa-github-alt"></i>@<a href="https://github.com/ozh">ozh</a></li>
            <li class="username"><i class="fa fa-facebook-square"></i><a href="https://www.facebook.com/ozh.richard">ozh.richard</a></li>
            <li class="user-loc"><i class="fa fa-map-marker"></i>Nantes, FR</li>
            <li class="user-url"><i class="fa fa-link"></i><a href="http://ozh.org">ozh.org</a></li>
            <li class="user-url"><i class="fa fa-link"></i><a href="http://planetozh.com">planetozh.com</a></li>
        </ul>
    </div>
</div>
<!-- END #user -->

<?php
// If you set up static pages for posts and front page, display links. See the comment in file stream_toggle.php
if( get_option( 'page_for_posts' ) )
    get_template_part( 'stream_toggle' );
?>