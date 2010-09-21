<form method="get" id="searchform" action="/tweets/">
	<div class="inner">
  	<label for="s">Search all tweets:</label>
  	<input type="text" name="s" id="s" value="<?php the_search_query(); ?>" class="txt" /><input type="submit" id="searchsubmit" value="&nbsp;" class="btn" />
	</div>
</form>