<?php
/* 
Template Name: Home page
*/
?>

<?php get_header(); ?> 

</div>
</div>
<div id="homepage">
	<div class="container">
		<div class="row">
			<div class="col-sm-10">
				<div class="intro-text">
					<?php
					  if (have_posts()): while (have_posts()): the_post();
						the_content();
					  endwhile; endif;
					?>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>
