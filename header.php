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
</div>

<!-- !BEGIN #container -->
<div id="container">

<!-- !BEGIN #content -->
<div id="content">

<!-- !BEGIN #user -->
<div id="user">
    <div id="user-pic">
        <a href="https://twitter.com/ozh"  class="avatar"><zimg src="<?php bloginfo('template_url'); ?>/img/new-profile.jpg" alt="Ozh" /></a>
    </div>
    <div id="user-info">
        <ul>
            <li id="user-realname">Ozh RICHARD</li>
            <li id="username"><i class="fa fa-twitter"></i>@<a href="https://twitter.com/ozh">ozh</a></li>
            <li id="username"><i class="fa fa-github-alt"></i>@<a href="https://github.com/ozh">ozh</a></li>
            <li id="username"><i class="fa fa-facebook-square"></i><a href="https://www.facebook.com/ozh.richard">ozh.richard</a></li>
            <li id="user-loc"><i class="fa fa-map-marker"></i>Nantes, FR</li>
            <li id="user-url"><i class="fa fa-link"></i><a href="http://ozh.org">ozh.org</a></li>
        </ul>
    </div>
</div>
<!-- END #user -->
