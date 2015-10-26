<?php
/* 
Template Name: Podcast 
*/
?>

<?php get_header(); ?> 


<div class="col-md-7 content-area" id="main-column">
	<main id="main" class="site-main" role="main">
  
		<?php 
		while (have_posts()) {
			the_post();


		} //endwhile;
		?> 

	</main>
</div>
<div class="col-md-4 col-md-offset-1">
	<div class="podcast-intro sidebar-intro">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/img/dollars-to-donuts.png"/>
		<p>A podcast where we talk with the people who lead user research in their organizations, hosted by Steve Portigal</p>
	</div>
	<div class="sidebar-section">
		<h3><a href="#">@DollarsToDonuts</a></h3>
		<ul class="podcast-list">
			<li><a href="#">iTunes</a></li>
			<li><a href="#">Android</a></li>
			<li><a href="#">Stitcher</a></li>
			<li><a href="#">RSS</a></li>
		</ul>
	</div>
	<div class="sidebar-section">
		<h2>Episodes</h2>
		<ol class="episode-list">
			<li>Gregg Bernstein of MailChimp</li>
			<li>Alex Wright of Etsy</li>
			<li>Frances Karandy of Citrix</li>
			<li>Nancy Frishberg of Financial Engines</li>
			<li>Kerry McAleer-Forte of Sears Holdings</li>
			<li>Carol Rossi of Edmunds.com</li>
		</ol>
	</div>
	<div class="sidebar-section">
		<h2>Praise for Dollars to Donuts</h2>
		<p class="quote">“Loving @steveportigal’s user research pod- cast right now. If you are doing any UX or user research, don’t miss it.”<span>@shannoncopfer</span></p>
		<p class="quote">“Stuffed full of practical insights. Eyeroll count: 0.”<span>@fred_beecher</span></p>
	</div>
	<a href="#" class="steve-more">Read more about Steve <svg class="arrow" width="96px" height="27px" viewBox="0 0 96 27" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"><path d="M91.5704459,12 L81.6366658,2.06621991 L80.9878862,1.41744024 L82.2854455,0.11988089 L82.9342252,0.768660563 L94.6122593,12.4466947 L94.9366491,12.7710845 L95.261039,13.0954744 L94.6122593,13.744254 L82.9342252,25.4222881 L82.2854455,26.0710678 L80.9878862,24.7735085 L81.6366658,24.1247288 L91.7613946,14 L-2.84217094e-14,14 L-2.84217094e-14,12 L91.5704459,12 Z" id="Line-Copy-3" sketch:type="MSShapeGroup"></path></g></svg></a>
</div>


<?php get_footer(); ?> 