<?php
/* 
Template Name: Blog
*/
?>

<?php get_header(); ?> 

<div class="col-md-7 content-area" id="main-column">
	<main id="main" class="site-main" role="main">


<?php get_the_ID(); ?> 
		<?php
		$wp_query = new WP_Query();
		$wp_query->query(array(
		'paged' => $paged,
		'posts_per_page' => 10,
		));

		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

			<article class="post">
				<a class="title" href="<?php the_permalink() ?>" style="text-decoration:none;" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><h1><?php the_title(); ?></h1></a>
				<p class="post-meta"><?php the_time('F jS, Y') ?></p>
				<div class="post-content">
					<?php the_content(); ?>
				</div>
				<div class="post-tags">
					<?php the_tags( '<p class="tag-title">Tags:</p><p class="tags">', ', ', '</p>'); ?>
				</div>
			</article>

		<?php  endwhile; ?>
		<?php wp_reset_postdata(); ?>

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