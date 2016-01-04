<div class="col-md-4 col-md-offset-1">
  <div class="podcast-intro sidebar-intro hidden-xs hidden-sm">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/dollars-to-donuts.png"/>
    <?php $podcast_intro = get_field('podcast_intro', 22012); ?>
    <?php echo $podcast_intro ?>
  </div>
  <div class="sidebar-section">
    <?php $podcast_twitter = get_field('dollars_to_donuts_twitter', 22012); ?>
    <h3><a href="<?php echo $podcast_twitter ?>">@DollarsToDonuts</a></h3>

    <?php
    // check if the repeater field has rows of data
    if( have_rows('podcast_links', 22012) ): ?>
     <ul class="podcast-list">
        <?php while ( have_rows('podcast_links', 22012) ) : the_row(); ?>
      <li>
        <a href="<?php the_sub_field('feed_url'); ?>">
              <?php the_sub_field('feed_name'); ?>
            </a>
        </li>
        <?php endwhile; ?>
    </ul>
    <?php else : ?>
    <?php endif; ?>

  </div>
  <div class="sidebar-section">
    <h2>Episodes</h2>
    <ul class="episode-list">
      <?php
        $wp_query = new WP_Query();
        $wp_query->query(array(
        'paged' => $paged,
        'order' =>'ASC',
        'posts_per_page' => 10,
        'series' => 'dollarstodonuts',
      ));
      while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <li>
          <a class="title" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        </li>
      <?php  endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </ul>
  </div>
  <div class="sidebar-section">

    <?php 
          $posts = get_field('podcast_testimonials', 22012);
          if( $posts ): ?>
            <h2>Praise for Dollars to Donuts</h2>
              <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                  <?php setup_postdata($post); ?>
          <article class="testimonial">
            <div class="testimonial-body"><?php the_content(); ?></div>
            <p class="attribution"><?php the_field('testimonial_attribution'); ?></p>
          </article>
              <?php endforeach; ?>
              <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>

  </div>
  <a href="/steve" class="steve-more sidebar">About Steve <svg class="arrow" width="96px" height="27px" viewBox="0 0 96 27" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"><path d="M91.5704459,12 L81.6366658,2.06621991 L80.9878862,1.41744024 L82.2854455,0.11988089 L82.9342252,0.768660563 L94.6122593,12.4466947 L94.9366491,12.7710845 L95.261039,13.0954744 L94.6122593,13.744254 L82.9342252,25.4222881 L82.2854455,26.0710678 L80.9878862,24.7735085 L81.6366658,24.1247288 L91.7613946,14 L-2.84217094e-14,14 L-2.84217094e-14,12 L91.5704459,12 Z" id="Line-Copy-3" sketch:type="MSShapeGroup"></path></g></svg></a>
</div>