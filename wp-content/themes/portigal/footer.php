      </div><!--.site-content-->
    </div><!--.container page-container-->
    
    <footer id="site-footer" role="contentinfo">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <p class="footer-label">Get In Touch!</p>
            <p class="footer-p"><?php the_field('footer_paragraph', 'option'); ?></p>
            <ul class="contact-info">
              <li><a href="mailto:<?php the_field('email', 'option'); ?>" target="_blank"><?php the_field('email', 'option'); ?></a><li>
              <li><a href="tel:+<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></li>
              <br>
              <li>Portigal Consulting LLC</li>
                <a href="<?php the_field('link_to_map', 'option'); ?>" target="_blank">
              <li><?php the_field('address_1', 'option'); ?></li>
              <li><?php the_field('address_2', 'option'); ?></li>
                </a> 
            </ul>
          </div>
          <div class="col-md-4 col-md-offset-1">
            <div class="footer-media">
              <div class="row">

                <!-- BOOK LINK -->
                <?php 
                $posts = get_field('footer_book', 'option');
                if( $posts ): ?>
                    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="footer-media-item">
                            <a href="<?php the_permalink(); ?>">
                              <img src="<?php bloginfo('stylesheet_directory'); ?>/img/interviewing-users.jpg"/>
                            </a>
                            <p class="footer-label">Read</p>
                            <a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
                        </div>
                        </div>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>

                <!-- PODCAST LINK -->
                <?php 
                $posts = get_field('footer_podcast', 'option');
                if( $posts ): ?>
                    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="footer-media-item">
                            <a href="<?php the_permalink(); ?>">
                              <img src="<?php bloginfo('stylesheet_directory'); ?>/img/Dollars-to-Donuts_cover170x170.jpg"/>
                            </a>
                            <p class="footer-label">Listen</p>
                            <a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
                        </div>
                        </div>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-md-offset-1">
            <ul class="footer-social">
              <li class="footer-label">Social</li>
              <li>
                <a href="<?php the_field('facebook', 'option'); ?>" target="_blank">
                  <svg class="icon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="56.693px" height="56.693px" viewBox="0 0 56.693 56.693" enable-background="new 0 0 56.693 56.693" xml:space="preserve">
                  <path d="M40.43,21.739h-7.645v-5.014c0-1.883,1.248-2.322,2.127-2.322c0.877,0,5.395,0,5.395,0V6.125l-7.43-0.029
                    c-8.248,0-10.125,6.174-10.125,10.125v5.518h-4.77v8.53h4.77c0,10.947,0,24.137,0,24.137h10.033c0,0,0-13.32,0-24.137h6.77
                    L40.43,21.739z"/>
                  </svg>
                </a>
              </li>
              <li>
                <a href="<?php the_field('twitter', 'option'); ?>" target="_blank">
                  <svg class="icon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="56.693px" height="56.693px" viewBox="0 0 56.693 56.693" enable-background="new 0 0 56.693 56.693" xml:space="preserve">
                    <path d="M52.837,15.065c-1.811,0.805-3.76,1.348-5.805,1.591c2.088-1.25,3.689-3.23,4.444-5.592c-1.953,1.159-4.115,2-6.418,2.454
                    c-1.843-1.964-4.47-3.192-7.377-3.192c-5.581,0-10.106,4.525-10.106,10.107c0,0.791,0.089,1.562,0.262,2.303
                    c-8.4-0.422-15.848-4.445-20.833-10.56c-0.87,1.492-1.368,3.228-1.368,5.082c0,3.506,1.784,6.6,4.496,8.412
                    c-1.656-0.053-3.215-0.508-4.578-1.265c-0.001,0.042-0.001,0.085-0.001,0.128c0,4.896,3.484,8.98,8.108,9.91
                    c-0.848,0.23-1.741,0.354-2.663,0.354c-0.652,0-1.285-0.063-1.902-0.182c1.287,4.015,5.019,6.938,9.441,7.019
                    c-3.459,2.711-7.816,4.327-12.552,4.327c-0.815,0-1.62-0.048-2.411-0.142c4.474,2.869,9.786,4.541,15.493,4.541
                    c18.591,0,28.756-15.4,28.756-28.756c0-0.438-0.009-0.875-0.028-1.309C49.769,18.873,51.483,17.092,52.837,15.065z"/>
                  </svg>
                </a>
              </li>
              <li>
                <a href="<?php the_field('linkedin', 'option'); ?>" target="_blank">
                  <svg class="icon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="56.693px" height="56.693px" viewBox="0 0 56.693 56.693" enable-background="new 0 0 56.693 56.693" xml:space="preserve">
                    <g>
                      <path d="M30.071,27.101v-0.077c-0.016,0.026-0.033,0.052-0.05,0.077H30.071z"/>
                      <path d="M49.265,4.667H7.145c-2.016,0-3.651,1.596-3.651,3.563v42.613c0,1.966,1.635,3.562,3.651,3.562h42.12
                        c2.019,0,3.654-1.597,3.654-3.562V8.23C52.919,6.262,51.283,4.667,49.265,4.667z M18.475,46.304h-7.465V23.845h7.465V46.304z
                         M14.743,20.777h-0.05c-2.504,0-4.124-1.725-4.124-3.88c0-2.203,1.67-3.88,4.223-3.88c2.554,0,4.125,1.677,4.175,3.88
                        C18.967,19.052,17.345,20.777,14.743,20.777z M45.394,46.304h-7.465V34.286c0-3.018-1.08-5.078-3.781-5.078
                        c-2.062,0-3.29,1.389-3.831,2.731c-0.197,0.479-0.245,1.149-0.245,1.821v12.543h-7.465c0,0,0.098-20.354,0-22.459h7.465v3.179
                        c0.992-1.53,2.766-3.709,6.729-3.709c4.911,0,8.594,3.211,8.594,10.11V46.304z"/>
                    </g>
                  </svg>
                </a>
              </li>
            </ul>
            <ul class="footer-subscribe">
              <li class="footer-label">Subscribe</li>
              <li>
                <a href="<?php the_field('blog', 'option'); ?>">
                  <svg class="icon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="56.693px" height="56.693px" viewBox="0 0 56.693 56.693" enable-background="new 0 0 56.693 56.693" xml:space="preserve">
                  <path d="M3.428,31.085c6.19,0,12.009,2.418,16.382,6.816c4.381,4.398,6.793,10.256,6.793,16.492h9.539
                    c0-18.113-14.676-32.848-32.714-32.848V31.085z M3.443,14.174c22.061,0,40.01,18.047,40.01,40.231h9.539
                    c0-27.445-22.229-49.77-49.549-49.77V14.174z M16.634,47.741c0,3.648-2.959,6.607-6.607,6.607S3.42,51.39,3.42,47.741
                    c0-3.65,2.958-6.607,6.606-6.607S16.634,44.091,16.634,47.741z"/>
                  </svg>
                  Blog
                </a>
              </li>
              <li>
                <a href="<?php the_field('podcasts', 'option'); ?>">
                  <svg class="icon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="56.693px" height="56.693px" viewBox="0 0 56.693 56.693" enable-background="new 0 0 56.693 56.693" xml:space="preserve">
                  <path d="M3.428,31.085c6.19,0,12.009,2.418,16.382,6.816c4.381,4.398,6.793,10.256,6.793,16.492h9.539
                    c0-18.113-14.676-32.848-32.714-32.848V31.085z M3.443,14.174c22.061,0,40.01,18.047,40.01,40.231h9.539
                    c0-27.445-22.229-49.77-49.549-49.77V14.174z M16.634,47.741c0,3.648-2.959,6.607-6.607,6.607S3.42,51.39,3.42,47.741
                    c0-3.65,2.958-6.607,6.606-6.607S16.634,44.091,16.634,47.741z"/>
                  </svg>
                  Podcast
                </a>
              </li>
              <li>
                <a href="<?php the_field('email_subscription', 'option'); ?>">
                  <svg class="icon" width="56px" height="38px" viewBox="0 0 56 38" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                          <g class="mail" sketch:type="MSLayerGroup">
                              <path d="M54.8999,2.3662 L29.6289,22.7782 C29.4449,22.9262 29.2229,23.0002 28.9999,23.0002 C28.7949,23.0002 28.5889,22.9372 28.4139,22.8102 L0.8089,2.8212 C0.2919,3.7212 -0.0001,4.7962 -0.0001,6.0002 L-0.0001,32.0002 C-0.0001,35.4202 2.5049,38.0002 5.8259,38.0002 L49.9999,38.0002 C53.3089,38.0002 55.9999,35.3082 55.9999,32.0002 L55.9999,6.0002 C55.9999,4.5872 55.5999,3.3482 54.8999,2.3662" id="Fill-1062" sketch:type="MSShapeGroup"></path>
                              <path d="M53.4502,0.9666 C52.4992,0.3466 51.3242,-0.000400000001 50.0002,-0.000400000001 L6.0002,-0.000400000001 C4.4602,-0.000400000001 3.1242,0.4686 2.1052,1.2896 L28.9672,20.7416 L53.4502,0.9666 Z" id="Fill-1063" sketch:type="MSShapeGroup"></path>
                          </g>
                      </g>
                  </svg>
                  Email
                </a>
              </li>
              <li>
                <a href="<?php the_field('twitter_all_posts', 'option'); ?>">
                  <svg class="icon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="56.693px" height="56.693px" viewBox="0 0 56.693 56.693" enable-background="new 0 0 56.693 56.693" xml:space="preserve">
                    <path d="M52.837,15.065c-1.811,0.805-3.76,1.348-5.805,1.591c2.088-1.25,3.689-3.23,4.444-5.592c-1.953,1.159-4.115,2-6.418,2.454
                    c-1.843-1.964-4.47-3.192-7.377-3.192c-5.581,0-10.106,4.525-10.106,10.107c0,0.791,0.089,1.562,0.262,2.303
                    c-8.4-0.422-15.848-4.445-20.833-10.56c-0.87,1.492-1.368,3.228-1.368,5.082c0,3.506,1.784,6.6,4.496,8.412
                    c-1.656-0.053-3.215-0.508-4.578-1.265c-0.001,0.042-0.001,0.085-0.001,0.128c0,4.896,3.484,8.98,8.108,9.91
                    c-0.848,0.23-1.741,0.354-2.663,0.354c-0.652,0-1.285-0.063-1.902-0.182c1.287,4.015,5.019,6.938,9.441,7.019
                    c-3.459,2.711-7.816,4.327-12.552,4.327c-0.815,0-1.62-0.048-2.411-0.142c4.474,2.869,9.786,4.541,15.493,4.541
                    c18.591,0,28.756-15.4,28.756-28.756c0-0.438-0.009-0.875-0.028-1.309C49.769,18.873,51.483,17.092,52.837,15.065z"/>
                  </svg>
                  All Posts
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>

    <script>
      $("#content").fitVids();
    </script>
  </body>
</html>
