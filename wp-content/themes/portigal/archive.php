<?php get_header(); ?>



<div id="content">

<?php if (have_posts()) : ?>

		 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if ( is_category() && !is_category('blog') ) { ?>				
		<h2 class="pagetitle">Archive for the '<?php echo single_cat_title(); ?>' Category</h2>
		
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>
		
	 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
		
	  <?php /* If this is a search */ } elseif (is_search()) { ?>
		<h2 class="pagetitle">Search Results</h2>
		
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Author Archive</h2>

		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Blog Archives</h2>

		<?php } ?>

		<?php while (have_posts()) : the_post(); if (in_category('news')) continue;?>
		<div class="post">
		 	<a class="title" href="<?php the_permalink() ?>" style="text-decoration:none;" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a>
			<div class="cite">By <?php the_author() ?> at <?php the_time() ?>, <?php the_time("l F d Y") ?> <?php edit_post_link(); ?></div>
			<?php the_content(); ?>
			<br /><br />
			<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
			<br /><br />
		<div class="commentPos"><?php wp_link_pages(); ?><?php comments_popup_link(__('0 Comments'), __('1 Comment'), __('% Comments')); ?>&nbsp;  | &nbsp; <?php if(function_exists('wp_email')) { email_link(); } ?>&nbsp; &nbsp;<?php if( function_exists('ADDTOANY_SHARE_SAVE_KIT') ) { ADDTOANY_SHARE_SAVE_KIT(); } ?></div>

			<br />
			<div class="sep"></div>
			<?php comments_template(); // Get wp-comments.php template ?>
		</div>
	<?php endwhile; ?>
		<div class="navigation">
			<?php global $paged; $category = get_the_category();if ( ($paged < 2) && is_category()) :?>
			<div class="alignleft"><a href="<?php bloginfo('url');?>/category/<?php echo $category[0]->category_nicename;?>/page/2">&laquo; Older Entries</a></div>
			<?php else :?>
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<?php endif;?>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>
	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
