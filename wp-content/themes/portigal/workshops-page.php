<?php
/* 
Template Name: Workshops
*/
?>

<?php get_header(); ?> 

</div>
</div>
<div class="secondary-section top-secondary">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1>Workshops</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="col-md-8 col-md-offset-2 content-area" id="main-column">
		<main id="main" class="site-main" role="main">
			<article>

				<?php
				  if (have_posts()): while (have_posts()): the_post();
					the_content(); echo '<br />';
				  endwhile; endif;
				?>

				<a href="#" class="steve-more sidebar">Read more about Steve <svg class="arrow" width="96px" height="27px" viewBox="0 0 96 27" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"><path d="M91.5704459,12 L81.6366658,2.06621991 L80.9878862,1.41744024 L82.2854455,0.11988089 L82.9342252,0.768660563 L94.6122593,12.4466947 L94.9366491,12.7710845 L95.261039,13.0954744 L94.6122593,13.744254 L82.9342252,25.4222881 L82.2854455,26.0710678 L80.9878862,24.7735085 L81.6366658,24.1247288 L91.7613946,14 L-2.84217094e-14,14 L-2.84217094e-14,12 L91.5704459,12 Z" id="Line-Copy-3" sketch:type="MSShapeGroup"></path></g></svg></a>
			</article>
		</main>
	</div>
</div>

<div class="secondary-section">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>Testimonials</h2>
				<article class="testimonial">
					<p class="testimonial-body">"Steve’s overview of the importance of cultural context in product design was a much appreciated eye-opener for our global design team."</p>
					<p class="attribution">Luke Wroblewski, author of Mobile First and former Lead UI Designer at eBay</p>
				</article>
				<article class="testimonial">
					<p class="testimonial-body">"Steve’s overview of the importance of cultural context in product design was a much appreciated eye-opener for our global design team."</p>
					<p class="attribution">Luke Wroblewski, author of Mobile First and former Lead UI Designer at eBay</p>
				</article>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?> 