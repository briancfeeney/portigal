<?php
/* 
Template Name: Work With Us 
*/
?>

<?php get_header(); ?> 

</div>
</div>
<div class="secondary-section top-secondary">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1><?php the_title(); ?></h1>
				<?php the_field('workwithus_intro'); ?>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-7 content-area" id="main-column">
			<main id="main" class="site-main" role="main">
				<article>

					<?php
					  if (have_posts()): while (have_posts()): the_post();
						the_content(); echo '<br />';
					  endwhile; endif;
					?>

				</article>
			</main>
		</div>
		<div class="col-md-4 col-md-offset-1">
			<div class="sidebar-section">
				<div class="client-list">
					<h2>Clients</h2>

					<?php
					// check if the repeater field has rows of data
					if( have_rows('clients') ): ?>
					 <ul>
					    <?php while ( have_rows('clients') ) : the_row(); ?>
						<li>
					        <?php the_sub_field('client_name'); ?>
					    </li>
					    <?php endwhile; ?>
					</ul>
					<?php else : ?>
					<?php endif; ?>
				</div>
			</div>

			<div class="sidebar-section">
				<h2>Testimonials</h2>

				<?php 
	              $posts = get_field('wwu_testimonials');
	              if( $posts ): ?>
	                  <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
	                      <?php setup_postdata($post); ?>
							<article class="testimonial">
								<div class="testimonial-body"><?php the_content(); ?></div>
								<p class="attribution"><?php the_field('testimonial_attribution'); ?></p>
							</article>
	                  <?php endforeach; ?>
	                  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	            <?php endif; ?>
	        </div>

            <a href="/steve" class="steve-more sidebar">About Steve <svg class="arrow" width="96px" height="27px" viewBox="0 0 96 27" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"><path d="M91.5704459,12 L81.6366658,2.06621991 L80.9878862,1.41744024 L82.2854455,0.11988089 L82.9342252,0.768660563 L94.6122593,12.4466947 L94.9366491,12.7710845 L95.261039,13.0954744 L94.6122593,13.744254 L82.9342252,25.4222881 L82.2854455,26.0710678 L80.9878862,24.7735085 L81.6366658,24.1247288 L91.7613946,14 L-2.84217094e-14,14 L-2.84217094e-14,12 L91.5704459,12 Z" id="Line-Copy-3" sketch:type="MSShapeGroup"></path></g></svg></a>
		</div>
	</div>
</div>

<?php get_footer(); ?> 