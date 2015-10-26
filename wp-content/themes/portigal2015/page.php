<?php
/**
 * Template for displaying pages
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?> 


<div class="col-md-7 content-area" id="main-column">
	<main id="main" class="site-main" role="main">
		<?php 
		while (have_posts()) {
			the_post();

			get_template_part('content', 'page');

		} //endwhile;
		?> 
	</main>
</div>
<div class="col-md-4 col-md-offset-1">
	This is a sidebar
</div>

<?php get_footer(); ?> 