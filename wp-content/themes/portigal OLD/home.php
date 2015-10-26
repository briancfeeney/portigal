<?php get_header(); ?>


<table width="800" border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td align="center" valign="top" width="100">&nbsp;</td>
      <td valign="top" width="400">
      	<?php $page2ID = 2;$page2Info = get_post($page2ID);$pageContent = $page2Info->post_content; echo $pageContent;?>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p><b><font color="#000000">Next &gt;</font> <a href="<?php bloginfo('url'); ?>/services/">Learn about our services</a></b></p></td>
      <td width="60"></td>
      <td width="200" valign="top" bgcolor="#FFFFFF" id="newsColumn"><p><b>News</b></p>
        <?php
		$posts = get_posts('numberposts=7&category=2');
		foreach($posts as $post) :
		setup_postdata($post);
		?>
        <p class="Newstext">
          <?php the_content(); ?>
        </p>
        <?php endforeach; ?>
		
		
		</td>
		
    </tr>
  </tbody>
</table>
<?php get_footer(); ?>
