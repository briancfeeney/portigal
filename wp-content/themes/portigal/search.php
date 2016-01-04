<?php get_header(); ?>


<div class="col-md-7 content-area" id="main-column">
	<main id="main" class="site-main search" role="main">
		<?php if (have_posts()) : ?>
		<h2 class="search-info">Search Results  for <span>“<?php echo ""."$s"; ?>”</span></h2>     			

		<?php while (have_posts()) : the_post(); if (in_category('news')) continue;?>

			<article class="post">
				<a class="title" href="<?php the_permalink() ?>" style="text-decoration:none;" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><h1><?php the_title(); ?></h1></a>
				<p class="post-meta"><?php the_time('F jS, Y') ?></p>
				<div class="post-content">
					<?php the_excerpt(); ?>
				</div>
			</article>

		<?php endwhile; ?>
		<?php else : ?>
			 No posts found. Try a different search?
		<?php endif; ?>

		<div class="pagination">
			<?php if(get_next_posts_link()) { ?>
			<span class="previous"><?php next_posts_link(' Previous Posts') ?></span>
			<?php } ?>
			<?php if(get_previous_posts_link()) { ?>
			<span class="next"><?php previous_posts_link('Newer Posts') ?></span>
			<?php } ?>
		</div>
	</main>
</div>
<?php get_sidebar('blog'); ?>
<?php get_footer(); ?>
