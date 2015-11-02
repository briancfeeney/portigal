<?php get_header(); ?>


<div id="content">

	<!-- THE LOOP -->
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 

			<div class="col-md-7 content-area" id="main-column">
				<main id="main" class="site-main" role="main">
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
				</main>
			</div>


	<?php endwhile; ?>

	<!-- THE NAVIGATION -->
	<?php if (is_single()):?>

	<?php else: ?>
		<div class="navigation">
			<?php global $paged; $category = get_the_category(); ?> 

				<?php if ( $paged < 2) :?>
			<div class="alignleft"><a href="<?php bloginfo('url');?>/category/<?php echo $category[0]->category_nicename;?>/page/2">&laquo; Older Entries</a></div>
				<?php else :?>
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
				<?php endif;?>

			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
	<?php endif;?>

	<!-- IF POSTS NOT FOUND -->
	<?php else : ?>

		<div class="post">
			<h2>Not Found</h2>
			<p>Sorry, but you are looking for something that isn't here.</p>
			<?php get_search_form(); ?>
		</div>
		
	<?php endif; ?>

</div>

<?php get_footer(); ?>
