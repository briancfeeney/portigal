<?php
/* 
Template Name: About Steve
*/
?>

<?php get_header(); ?> 

<div class="col-md-12 content-area" id="main-column">
	<main id="main" class="site-main" role="main">

		<div class="row">
			<div class="col-md-7">
				<h1><?php the_title(); ?></h1>
				<?php echo $post->post_content ?>
			</div>
			<div class="col-md-4 col-md-offset-1">
				<img src="" />
			</div>
		</div>

	</main>
</div>

<?php get_footer(); ?> 