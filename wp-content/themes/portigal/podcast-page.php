<?php
/* 
Template Name: Podcast 
*/
?>

<?php get_header(); ?> 


<div class="col-md-7 content-area" id="main-column">
	<main id="main" class="site-main" role="main">

	  <div class="podcast-intro sidebar-intro hidden-md hidden-lg">
	    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/dollars-to-donuts.png"/>
	    <?php $podcast_intro = get_field('podcast_intro', 22012); ?>
	    <?php echo $podcast_intro ?>
	  </div>

<!-- CUSTOM POST TYPE -->
		<?php
			global $post;
			$posts = get_posts( array( 'post_type' => 'Podcast', 'posts_per_page' => '100') );
			if( $posts ):
			   foreach( $posts as $post ) :   
			    setup_postdata($post); ?>

			<article class="post podcast">
				<a class="title" href="<?php the_permalink() ?>" style="text-decoration:none;" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><h1><?php the_title(); ?></h1></a>
				<p class="post-meta"><?php the_time('F jS, Y') ?> <span>From the Series <a href="/dollars-to-donuts">Dollars To Donuts</a></span></p>
				<div class="post-content">
					<?php the_excerpt(); ?>
				</div>
				<a class="read-more">Read the full transcript</a>
				<!--
				<div class="post-tags">
					<?php the_tags( '<p class="tag-title">Tags:</p><p class="tags">', ', ', '</p>'); ?>
				</div> -->
			</article>

			   <?php endforeach; 
			wp_reset_postdata(); 
		endif; ?>
<!-- END CUSTOM POST TYPE -->

		<?php
		$wp_query = new WP_Query();
		$wp_query->query(array(
		'paged' => $paged,
		'posts_per_page' => 10,
		'series' => 'dollarstodonuts',
		));

		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

			<article class="post podcast">
				<a class="title" href="<?php the_permalink() ?>" style="text-decoration:none;" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><h1><?php the_title(); ?></h1></a>
				<p class="post-meta"><?php the_time('F jS, Y') ?> <span>From the Series <a href="/dollars-to-donuts">Dollars To Donuts</a></span></p>
				<div class="post-content">
					<?php the_content(); ?>
				</div>
				<!--
				<div class="post-tags">
					<?php the_tags( '<p class="tag-title">Tags:</p><p class="tags">', ', ', '</p>'); ?>
				</div> -->
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
<?php get_sidebar('podcast'); ?>


<?php get_footer(); ?> 