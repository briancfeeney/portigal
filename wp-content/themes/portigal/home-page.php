<?php
/* 
Template Name: Home page
*/
?>

<?php get_header(); ?> 

</div>
</div>
<div id="homepage">
	<div class="homepage-row">
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
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
	<div class="homepage-row">
		<div class="container">
			<div class="row">
				<div class="col-sm-5">
					<div class="workshop-text homepage-padding">
						<h1><a href="/workshops">Workshops</a></h1>
						<?php the_field('homepage_workshop_text'); ?>
						<a href="/workshops" class="read-more">Learn More</a>
					</div>
				</div>
				<div class="col-sm-7">
					<div class="homepage-book homepage-padding">
						<?php 
		                $posts = get_field('homepage_book_promotion');
		                if( $posts ): ?>
		                    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
		                        <?php setup_postdata($post); ?>
		                        	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		                            <a href="<?php the_permalink(); ?>"><img src="<?php the_field('cover_image'); ?>"/></a>
		                    <?php endforeach; ?>
		                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		                <?php endif; ?>

		                <?php the_field('homepage_book_promotion_text'); ?>
		            </div>
				</div>
			</div>
		</div>
	</div>
	<div class="homepage-row">
		<div class="container">
			<div class="homepage-padding">
				<h1><a href="/speaking">Speaking</a></h1>
				<div class="row">
					<div class="col-sm-7">
						<?php the_field('homepage_video'); ?>
						<?php the_field('video_caption'); ?>
					</div>
					<div class="col-sm-5">
						<h1>Upcoming Events</h1>
						<?php the_field('upcoming_speaking_events', 21751); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="homepage-row">
		<div class="container">
			<div class="homepage-padding">
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<h1>Selected Writing</h1>
					</div>
					<div class="col-md-9 col-sm-8">
						<?php if(get_field('homepage_selected_writing')): ?>
							<ul class="selected-writing">
							<?php while(has_sub_field('homepage_selected_writing')): ?>
								<li><a href="">
									<h1><?php the_sub_field('homepage_selected_writing_title'); ?></h1>
									<p class="publication"><?php the_sub_field('homepage_seleted_writing_publication'); ?></p>
								</a></li>
							<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>
