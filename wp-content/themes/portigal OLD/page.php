<?php get_header(); ?>

<?php if (is_page('about-us')):?>
	<table cellpadding="0" cellspacing="0" border="0">
  		<tr>
    		<td width="102" valign="top"></td>
    		<td width="160" valign="top"><?php $page1693ID = 1693;$page1693Info = get_post($page1693ID);$pageContent = $page1693Info->post_content; echo $pageContent;?></td>
    		<td width="400" valign="top"><?php $page1683ID = 1683;$page1683Info = get_post($page1683ID);$pageContent = $page1683Info->post_content; echo $pageContent;?>
	

<?php elseif (is_page('contact')):?>
	<table cellpadding="0" cellspacing="0" border="0">
		<tr>
    		<td width="102" valign="top"></td>
   	 		<td width="160" valign="top"><?php $page1680ID = 1680;$page1680Info = get_post($page1680ID);$pageContent = $page1680Info->post_content; echo $pageContent;?></td>
    		<td width="400" valign="top"><?php $page1679ID = 1679;$page1679Info = get_post($page1679ID);$pageContent = $page1679Info->post_content; echo $pageContent;?>
	





<?php elseif (is_page('clients')):?>
	<?php $page1678ID = 1678;$page1678Info = get_post($page1678ID);$pageContent = $page1678Info->post_content; ?>
	<div id="content" class="clients">
		<div class="post">
			<?php echo $pageContent;?>
			<div class="clearjz"></div>
			<p class="alignright"><font color="#000000"><strong>Next &gt;</strong> <a href="<?php bloginfo('url'); ?>/contact/"><b>Take the next step</b></a></p>
		</div>
	</div>
	
      

<?php elseif (is_page('services')):?>
	<table width="800" cellpadding="0" cellspacing="0" border="0">
  	<tr>
    	<td width="102" valign="top"></td>
    	<td width="160" valign="top"><?php $page3ID = 3;$page3Info = get_post($page3ID);$pageContent = $page3Info->post_content; echo $pageContent;?></td>
    	<td width="400" valign="top"><?php $page1677ID = 1677;$page1677Info = get_post($page1677ID);$pageContent = $page1677Info->post_content; echo $pageContent;?>
		<br /><br />
		<p><font color="#000000"><strong>Next &gt;</strong></font> <a href="<?php bloginfo('url'); ?>/clients/"><b>See how these services benefited our clients</b></a></p><br /><br />
    

<?php else : // Generic Page ?>
	<table cellpadding="0" cellspacing="0" border="0">
		<tr>
    		<td width="98" valign="top"></td>
    		<td width="545" valign="top">
    			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<br />
					<div class="post">
	 					<a class="title" href="<?php the_permalink() ?>" style="text-decoration:none;" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a>
						<div class="cite"><?php the_time("l F dS Y") ?>, <?php the_time() ?> <?php edit_post_link(); ?></div>
						<?php the_content(); ?>
						<br /><br />
						<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
						<br /><br />
			<div class="commentPos"><?php wp_link_pages(); ?><?php comments_popup_link(__('0 Comments'), __('1 Comment'), __('% Comments')); ?>&nbsp;  | &nbsp; <?php if(function_exists('wp_email')) { email_link(); } ?>&nbsp; &nbsp;<?php if( function_exists('ADDTOANY_SHARE_SAVE_KIT') ) { ADDTOANY_SHARE_SAVE_KIT(); } ?></div>

						<br />
						<div class="sep"></div>
						<?php comments_template();?>
					</div>
				<?php endwhile; ?>
					<div class="navigation">
						<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
						<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
					</div>

				<?php else : ?>
					<h2 class="center">Not Found</h2>
					<p class="center">Sorry, but you are looking for something that isn't here.</p>
					<?php get_search_form(); ?>
				<?php endif; ?>
			</td>
  		</tr>
	</table>
	
<?php endif;?>
<?php if (is_page('clients')):?>
	<div class="clearjz"></div>
	<div id="subscribeFooter">
<?php endif;?>	
<p></p>
</td>
  </tr>
</table>
<p><br>
</p>
<?php if (is_page('clients')):?>
	</div>
<?php endif;?>	

<?php get_footer(); ?>
