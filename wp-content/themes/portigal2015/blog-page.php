<?php
/* 
Template Name: Blog
*/
?>

<?php get_header(); ?> 


<div class="col-md-7 content-area" id="main-column">
	<main id="main" class="site-main" role="main">

		<?php
		$wp_query = new WP_Query();
		$args = array(
		     'post_type' => array('post')
		);
		$wp_query->query($args);
		while ($wp_query->have_posts()) : $wp_query->the_post();
		?>

		<article class="post">
			<h1> <?php the_title(); ?></h1>
			<p class="post-meta"><?php the_time('F jS, Y') ?> | <span><?php the_category(', ') ?></span></p>
			<div class="post-content">
				<?php the_content(); ?>
			</div>
			<div class="post-tags">
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
			</div>
		</article>

		<?php endwhile; ?>

		<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
		<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

	</main>
</div>
<div class="col-md-4 col-md-offset-1">
	<div class="sidebar-intro">
		<h1>Blog</h1>
		<p>All this chitta chattah</p>
	</div>

	<div class="sidebar-section">
		<h2>Series</h2>
		<ul class="blog-list">
			<li><a href="#">War Stories</a></li>
			<li><a href="#">Reading Ahead</a></li>
		</ul>
	</div>

	<div class="sidebar-section">
		<form id="search" method="get" action="http://www.portigal.com">
		    <p>
		      <input type="text" class="input" name="s" id="search" size="19" />
		      <input name="submit" type="submit" tabindex="5" value="Search" />
		    </p>
		  </form>
  	</div>

	<div class="sidebar-section" id="other-news">
		<h2>Other News</h2>
		<article>Steve will be teaching Soft Skills Are Hard twice at UX Week on August 26 and 27 in San Francisco.</article>
		<article>Steve will be teaching Well, We’ve Done All This Research. Now What? and presenting and Yes, My Tuatara Loves to Cha-Cha: Improv, Creativity and Design at UX New Zealand in Wellington, October 28-30th.</article>
		<article>Steve will be presenting The Designer is Present as a keynote and teaching Soft Skills Are Hard as a workshop at Interact 15 on October 19-21 in London.</article>
		<article>Steve will be presenting Epic FAIL: Takeaways from the War Stories Project at Fluxible on Sep- tember 26 in Kitchener, Ontario.</article>
		<article>Steve presented a webinar about Interviewing Users for the Association of Registered Graphic Designers.</article>
		<article>Steve answered questions about insights and innovation in Ask the UXpert (transcript).</article>
	</div>
	<a href="#" class="steve-more">Read more about Steve <svg class="arrow" width="96px" height="27px" viewBox="0 0 96 27" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"><path d="M91.5704459,12 L81.6366658,2.06621991 L80.9878862,1.41744024 L82.2854455,0.11988089 L82.9342252,0.768660563 L94.6122593,12.4466947 L94.9366491,12.7710845 L95.261039,13.0954744 L94.6122593,13.744254 L82.9342252,25.4222881 L82.2854455,26.0710678 L80.9878862,24.7735085 L81.6366658,24.1247288 L91.7613946,14 L-2.84217094e-14,14 L-2.84217094e-14,12 L91.5704459,12 Z" id="Line-Copy-3" sketch:type="MSShapeGroup"></path></g></svg></a>
</div>


<?php get_footer(); ?> 