<?php
/* 
Template Name: Blog Single
*/
?>

<?php get_header(); ?> 

<div class="col-md-7 content-area" id="main-column">
	<main id="main" class="site-main" role="main">

			<article class="post">
				<a class="title" href="<?php the_permalink() ?>" style="text-decoration:none;" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><h1><?php the_title(); ?></h1></a>
				<p class="post-meta"><?php the_time('F jS, Y') ?></p>
				<div class="post-content">
					<?php
					  if (have_posts()): while (have_posts()): the_post();
						the_content();
					  endwhile; endif;
					?>
				</div>
				<div class="post-tags">
					<?php the_tags( '<p class="tag-title">Tags:</p><p class="tags">', ', ', '</p>'); ?>
				</div>
			</article>

		<div class="pagination">
			<?php if(get_next_post_link()) { ?>
			<span class="next"><?php next_post_link('%link', 'Next Post') ?></span>
			<?php } ?>
			<?php if(get_previous_post_link()) { ?>
			<span class="previous"><?php previous_post_link('%link', 'Previous Post') ?></span>
			<?php } ?>
		</div>

	</main>
</div>

<?php get_sidebar('blog'); ?>
<?php get_footer(); ?> 