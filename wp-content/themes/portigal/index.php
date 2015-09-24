<?php get_header(); ?>


<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); if (is_single() && in_category('news') )  : else : if (in_category('news')) continue; endif;?>
		<div class="post">
		 	<a class="title" href="<?php the_permalink() ?>" style="text-decoration:none;" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a>
			<div class="cite">By <?php the_author() ?> at <?php the_time() ?>, <?php the_time("l F d Y") ?> <?php edit_post_link(); ?></div>
			<?php the_content(); ?>
			<br /><br />
			<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
			<div class="commentPos"><?php wp_link_pages(); ?><?php comments_popup_link(__('0 Comments'), __('1 Comment'), __('% Comments')); ?>&nbsp;  | &nbsp; <?php if(function_exists('wp_email')) { email_link(); } ?>&nbsp; &nbsp; <?php if (function_exists('stc_tweetbutton_button')) echo stc_tweetbutton_button();?></div>


			<?php if (is_single()):?>
			<div class="clearjz"></div>
			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php previous_post_link('&laquo; %link', '%title', TRUE, '2'); ?></div>
				<div class="nav-next"><?php next_post_link('%link &raquo; ', '%title', TRUE, '2'); ?></div>
				<div class="clearjz"></div>
			</div>
			
			<?php endif;?>
			<div class="sep"></div>
			<?php comments_template(); // Get wp-comments.php template ?>
		</div>
	<?php endwhile; ?>
		<?php if (is_single()):?>
		<?php else: ?>
		<div class="navigation">
			<?php global $paged; $category = get_the_category();if ( $paged < 2) :?>
			<div class="alignleft"><a href="<?php bloginfo('url');?>/category/<?php echo $category[0]->category_nicename;?>/page/2">&laquo; Older Entries</a></div>
			<?php else :?>
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<?php endif;?>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
		<?php endif;?>
	<?php else : ?>
		<div class="post">
			<h2>Not Found</h2>
			<p>Sorry, but you are looking for something that isn't here.</p>
			<?php get_search_form(); ?>
		</div>
		
	<?php endif; ?>
</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
