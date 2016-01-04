<?php 

if( function_exists('acf_add_options_page') ) {
  acf_add_options_page();
}

  function show_posts_nav() {
  	global $wp_query;
  	return ($wp_query->max_num_pages > 1);
  }

  function sdac_comment($comment, $args, $depth) {
     $GLOBALS['comment'] = $comment; ?>
     <div class="commentBox <?php comment_class();?>" id="li-comment-<?php comment_ID() ?>">
       <div id="comment-<?php comment_ID(); ?>">
       <?php if(function_exists('get_avatar')) { echo get_avatar($comment, '40'); } ?>
  	<?php comment_text() ?>

      <i><?php comment_type(__('Comment'), __('Trackback'), __('Pingback')); ?> <?php _e('by'); ?> <?php comment_author_link() ?>
      <?php comment_date('m.d.y') ?> @ <a href="#comment-<?php comment_ID() ?>"><?php comment_time() ?></a> <?php edit_comment_link(__("Edit This"), ' |'); ?></i>
  	<p class="reply"> <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></p>

  </div>
  </div>
  <br />
<?php
  }
?>
