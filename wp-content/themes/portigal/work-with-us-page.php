<?php
/* 
Template Name: Work With Us 
*/
?>

<?php get_header(); ?> 


	<div class="col-md-8 col-md-offset-2 content-area" id="main-column">
		<main id="main" class="site-main" role="main">
			<h1>Work With Us</h1>
			<article>

				<?php
				  if (have_posts()): while (have_posts()): the_post();
					the_content(); echo '<br />';
				  endwhile; endif;
				?>

				<a href="#" class="steve-more sidebar">Read more about Steve <svg class="arrow" width="96px" height="27px" viewBox="0 0 96 27" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"><path d="M91.5704459,12 L81.6366658,2.06621991 L80.9878862,1.41744024 L82.2854455,0.11988089 L82.9342252,0.768660563 L94.6122593,12.4466947 L94.9366491,12.7710845 L95.261039,13.0954744 L94.6122593,13.744254 L82.9342252,25.4222881 L82.2854455,26.0710678 L80.9878862,24.7735085 L81.6366658,24.1247288 L91.7613946,14 L-2.84217094e-14,14 L-2.84217094e-14,12 L91.5704459,12 Z" id="Line-Copy-3" sketch:type="MSShapeGroup"></path></g></svg></a>
			</article>
			<div class="client-list">
				<h2>Clients</h2>
				<ul>
					<li>Autodesk</li>
					<li>Belkin</li>
					<li>Beringer</li>
					<li>BIC</li>
					<li>Chevron</li>
					<li>Dolby</li>
					<li>eBay</li>
					<li>Fisher-Price</li>
					<li>Harcourt</li>
					<li>Hewlett-Packard</li>
					<li>Intuit</li>
					<li>Kensington</li>
					<li>Masterfoods</li>
					<li>McCormick</li>
					<li>Mozilla</li>
					<li>Microsoft</li>
					<li>Nestle</li>
					<li>Nike</li>
					<li>Nokia</li>
					<li>Paypal</li>
					<li>Plantronics</li>
					<li>SAP</li>
					<li>SC Johnson</li>
					<li>Shure</li>
					<li>Sony</li>
					<li>WNBA</li>
				</ul>
			</div>
		</main>
	</div>
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