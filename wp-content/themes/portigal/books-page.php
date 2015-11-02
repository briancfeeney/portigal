<?php
/* 
Template Name: Books Index
*/
?>

<?php get_header(); ?> 

<div class="col-md-12 content-area" id="main-column">
	<main id="main" class="site-main" role="main">

		<?php
			global $post;
			$posts = get_posts( array( 'post_type' => 'book') );
			if( $posts ):
			   foreach( $posts as $post ) :   
			    setup_postdata($post); ?>

				<div class="book">
					<div class="row">
						<div class="col-md-3">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/interviewing-users.jpg"/>
						</div>
						<div class="col-md-9">
							<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="steve-more">Read more <svg class="arrow" width="96px" height="27px" viewBox="0 0 96 27" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"><path d="M91.5704459,12 L81.6366658,2.06621991 L80.9878862,1.41744024 L82.2854455,0.11988089 L82.9342252,0.768660563 L94.6122593,12.4466947 L94.9366491,12.7710845 L95.261039,13.0954744 L94.6122593,13.744254 L82.9342252,25.4222881 L82.2854455,26.0710678 L80.9878862,24.7735085 L81.6366658,24.1247288 L91.7613946,14 L-2.84217094e-14,14 L-2.84217094e-14,12 L91.5704459,12 Z" id="Line-Copy-3" sketch:type="MSShapeGroup"></path></g></svg></a>
						</div>
					</div>
				</div>

			   <?php endforeach; 
			wp_reset_postdata(); 
		endif; ?>

	</main>
</div>


<?php get_footer(); ?> 