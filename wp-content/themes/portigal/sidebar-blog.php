<div class="col-md-4 col-md-offset-1">
  <div class="sidebar-intro hidden-xs hidden-sm">
    <h1>Blog</h1>
    <?php $blog_intro = get_field('blog_intro', 22015); ?>
    <?php echo $blog_intro ?>
  </div>

  <div class="sidebar-section">
    <form id="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
        <p>
          <input type="text" class="input" name="s" id="search" size="19" />
          <input name="submit" type="submit" tabindex="5" value="Search" />
        </p>
      </form>
    </div>

  <!--<div class="sidebar-section">
    <h2>Series</h2>
    <?php wp_serieslist_display() ?>

    <ul class="blog-list">
      <li><a href="#">War Stories</a></li>
      <li><a href="#">Reading Ahead</a></li>
    </ul> 
  </div> -->

  <!-- 
  <div class="sidebar-section" id="other-news">
    <h2>Other News</h2>
    <?php
      $posts = get_posts('numberposts=7&category=2');
      foreach($posts as $post) :
      setup_postdata($post);
    ?>
          <article>
            <?php the_content(); ?>
          </article>
    <?php endforeach; ?>
  </div>
  -->

  <a href="/steve" class="steve-more sidebar">About Steve <svg class="arrow" width="96px" height="27px" viewBox="0 0 96 27" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"><path d="M91.5704459,12 L81.6366658,2.06621991 L80.9878862,1.41744024 L82.2854455,0.11988089 L82.9342252,0.768660563 L94.6122593,12.4466947 L94.9366491,12.7710845 L95.261039,13.0954744 L94.6122593,13.744254 L82.9342252,25.4222881 L82.2854455,26.0710678 L80.9878862,24.7735085 L81.6366658,24.1247288 L91.7613946,14 L-2.84217094e-14,14 L-2.84217094e-14,12 L91.5704459,12 Z" id="Line-Copy-3" sketch:type="MSShapeGroup"></path></g></svg></a>
</div>