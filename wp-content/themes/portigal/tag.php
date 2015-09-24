<?php get_header(); ?> 



	<div id="content">
		<div class="title"><em><?php single_tag_title();?></em> posts</div>
		<br />
			<?php if (have_posts()) : while (have_posts()) : the_post(); if (in_category('news')) continue;?>
				<div class="post" id="post-<?php the_ID(); ?>"> 
					<a class="title" href="<?php the_permalink() ?>" style="text-decoration:none;" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a>
                    <small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small> 
					<div class="entry"> 
						<?php the_content('Read the rest of this entry &raquo;'); ?> 
                    </div> 
<div class="commentPos"><?php wp_link_pages(); ?><?php comments_popup_link(__('0 Comments'), __('1 Comment'), __('% Comments')); ?>&nbsp;  | &nbsp; <?php if(function_exists('wp_email')) { email_link(); } ?>&nbsp; &nbsp;<?php if( function_exists('ADDTOANY_SHARE_SAVE_KIT') ) { ADDTOANY_SHARE_SAVE_KIT(); } ?></div>

					<div class="sep"></div>
				</div> 
			<?php endwhile; ?> 
				<div style="width: 500px">
				<div class="left"><?php next_posts_link('&laquo; Older Entries') ?></div>
 				<div class="right"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
			</div>
			<?php else : ?> 
				<h2 class="center">Not Found</h2> 
                <p class="center">Sorry, but you are looking for something that isn't here.</p> 
			<?php endif; ?> 
        </div> 
<?php get_sidebar(); ?>
<?php get_footer(); ?> 
