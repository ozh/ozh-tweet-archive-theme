</div>
<!-- END #content -->

<?php get_sidebar(); ?>


<span class="reset">&nbsp;</span>

<div id="footer">
  <p>Powered by
  <a href="http://wordpress.org/"><i class="fa fa-hand-o-right"></i> WordPress</a>
  with <a href="http://planetozh.com/blog/my-projects/ozh-tweet-archiver-backup-twitter-with-wordpress/"><i class="fa fa-hand-o-right"></i> Ozh' Tweet Archiver</a>.
  and <a href="http://planetozh.com/blog/my-projects/ozh-tweet-archive-theme-for-wordpress/"><i class="fa fa-hand-o-right"></i> Ozh' Tweet Archive Theme</a>.
  <?php echo get_num_queries(); ?> queries in <?php timer_stop(true,2); ?> seconds.</p>
</div>
<?php wp_footer(); ?>

</div>
<!-- END #container -->

</body>
</html>
