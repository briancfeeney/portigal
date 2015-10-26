<?php get_header(); ?>

	<div id="content">
 		<div class="post">
  			<?php if (have_posts()) : ?>
				<br />
   				<div class="title">Search Results  for <em><?php echo ""."$s"; ?></em> </div>
    			<br />
     			<?php while (have_posts()) : the_post(); if (in_category('news')) continue;?>
     				<a class="title" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
					<div class="cite"><?php the_time("l F dS Y") ?>, <?php the_time() ?> by <?php the_author() ?> <?php edit_post_link(); ?></div>
      				<?php the_excerpt() ?>
       				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">( more )</a>
					<br /><br /><br />
  				<?php endwhile; ?>
				<?php else : ?>
					 No posts found. Try a different search?<br />
					 <br />
					<form style="padding: 0px; margin-top: 0px; margin-bottom: 0px;" id="searchform" method="get" action="<?php bloginfo('url'); ?>">
      					<input type="text" class="input" name="s" id="search" size="15" />
      					<input name="submit" type="submit" tabindex="5" value="<?php _e('GO'); ?>" />
					</form>
				<?php endif; ?>
			</div>
			<div style="width: 500px">
				<div class="left"><?php next_posts_link('&laquo; Older Entries') ?></div>
 				<div class="right"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
			</div>
			<br /><br />
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
