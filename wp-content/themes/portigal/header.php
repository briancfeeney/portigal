<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
	<meta name="keywords" content="Steve Portigal, strategy, consulting, product design, design, ethnography, ethnographic research, insight, culture, understanding, Portigal">
	<meta name="description" content="Portigal Consulting, bringing together user research (ethnography), design and business strategy">
	<meta name="copyright" content="2001-2015 Steve Portigal">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/portigal.css" type="text/css" media="screen" />
	<script language="javascript" type="text/javascript" src="http://portigal.com/scripts.js"></script>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<script src="https://use.typekit.net/dsj5yjf.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	
	<?php wp_head(); ?>
	<!-- WP Engine -->
</head>

<body <?php body_class(); ?>>

	<header id="header" role="banner">
		<div class="container">
			<div class="row site-branding">
				<div class="col-md-6 site-title">
					<h1 class="site-title-heading">
						<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
							<svg version="1.1" id="portigal-wordmark" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 viewBox="0 0 491 147.8" enable-background="new 0 0 491 147.8" xml:space="preserve">
								<path fill="#ffffff" d="M0,117.1V1.6h40.3c24.6,0,35.4,14.1,35.4,32.3c0,19.2-13.3,31.7-42.4,31.7H12.8v51.5H0z M12.8,54.7h21.8
									c21.3,0,28.3-7.4,28.3-21.1s-8.2-21.1-25.4-21.1H12.8V54.7z"/>
								<path fill="#ffffff" d="M114.6,118.7c-22.7,0-34.1-19.2-34.1-43.2s11.4-43.2,34.1-43.2s34.1,19.2,34.1,43.2S137.3,118.7,114.6,118.7
									z M114.6,42.2C100.8,42.2,92,54.1,92,75.5s8.8,33.3,22.6,33.3s22.6-11.8,22.6-33.3S128.3,42.2,114.6,42.2z"/>
								<path fill="#ffffff" d="M162.8,33.9h11.5v16.5h0.3c6.4-11.4,13.3-17.8,27-17.8v11.5c-14.4,0.3-21.9,9.8-27.4,26.9v46.1h-11.5V33.9z"
									/>
								<path fill="#ffffff" d="M230.6,33.9V6.6h11.5v27.4h19.2v9.9h-19.2V103c0,3.8,2.7,5.8,9.4,5.8c3.8,0,7.2-0.3,10.2-0.8v9.4
									c-2.1,0.6-6.7,1.3-13.4,1.3c-12.5,0-17.8-3.2-17.8-13.8V43.8H217v-9.9H230.6z"/>
								<path fill="#ffffff" d="M291.1,0v13.8h-11.5V0H291.1z M279.6,33.9h11.5v83.2h-11.5V33.9z"/>
								<path fill="#ffffff" d="M382.6,42.2c-4.8,0-9.9,0.8-12.8,2.2c2.4,2.9,5.8,9.3,5.8,17c0,16.5-13.6,29.1-30.4,29.1
									c-6.7,0-10.2-1-14.7-2.2c-4.5,1.3-6.6,4-6.6,7.7c0,3.8,2.7,6.1,6.9,6.1c39.4,0,52,7,52,23.4c0,12.2-12,22.4-37.9,22.4
									c-23.4,0-35.8-6.4-35.8-20.2c0-8.3,5.1-12.3,14.1-17c-6.4-1.9-10.4-6.9-10.4-11.8c0-7.2,4.8-10.2,11.2-14.2
									c-7.8-5.9-11.4-14.1-11.4-23.2c0-17.6,13.8-29.1,31.5-29.1c9,0,15.2,1.9,20.6,5.8c5-3.5,11.7-6.7,17.9-7.4V42.2z M343.1,113.6
									c-18.1,0-23.2,8-23.2,13.9c0,6.2,3.8,10.4,26.9,10.4c13.8,0,25-3.8,25.1-12C371.8,117.8,363.4,113.6,343.1,113.6z M343.6,42.2
									c-13.1,0-20.2,8.3-20.2,19.2c0,11,8.6,19.2,21.4,19.2c13.1,0,19.8-8.6,19.8-18.6C364.7,49.9,357.7,42.2,343.6,42.2z"/>
								<path fill="#ffffff" d="M398.3,49.9c5.3-9.6,15.5-17.6,31.2-17.6c14.1,0,28.8,6.7,28.8,25v41.9c0,9.1,0.8,13.6,1.9,17.9h-11.8
									l-1.3-11.5c-5.8,6.4-15,13.1-27.5,13.1c-12.8,0-23.7-7.7-23.7-22.9c0-18.2,13.9-27.4,50.9-33.9v-4.5c0-11-7.2-15.2-17.1-15.2
									c-12.8,0-19,7.4-21.3,13L398.3,49.9z M446.8,72.2c-26.4,4.6-39.4,12.3-39.4,23.8c0,7.7,7.4,12.8,13.8,12.8c8.3,0,18.9-6.1,25.6-13.8
									V72.2z"/>
								<path fill="#ffffff" d="M491,1.6v115.5h-11.5V1.6H491z"/>
							</svg>
						</a>
					</h1>
				</div>
				<div class="col-md-6 page-header-top-right">
					<div class="sr-only">
						<a href="#content" title="<?php esc_attr_e('Skip to content', 'bootstrap-basic'); ?>"><?php _e('Skip to content', 'bootstrap-basic'); ?></a>
					</div>
					<?php if (is_active_sidebar('header-right')) { ?> 
					<div class="pull-right">
						<?php dynamic_sidebar('header-right'); ?> 
					</div>
					<div class="clearfix"></div>
					<?php } // endif; ?> 
				</div>
			</div><!--.site-branding-->
		</div>
			<div class="main-navigation">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<nav class="navbar navbar-default" role="navigation">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
										<span class="sr-only"><?php _e('Toggle navigation', 'bootstrap-basic'); ?></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								
								<div class="collapse navbar-collapse navbar-primary-collapse">
									<ul id="menu-dev-menu" class="nav navbar-nav"><li id="menu-item-22004" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-22004 active active"><a href="http://portigal.dev">Work With Us</a></li>
										<li id="menu-item-22005" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-22005 active active"><a href="http://portigal.dev">Workshops</a></li>
										<li id="menu-item-22006" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-22006 active active"><a href="http://portigal.dev">Books</a></li>
										<li id="menu-item-22007" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-22007 active active"><a href="http://portigal.dev/speaking">Speaking</a></li>
										<li id="menu-item-22008" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-22008 active active"><a href="http://portigal.dev/blog">Blog</a></li>
										<li id="menu-item-22009" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-22009 active active"><a href="http://portigal.dev/dollars-to-donuts/">Podcast</a></li>
									</ul>

									<div class="header-email">
										<a href="#"> 
											<svg class="icon" viewBox="0 0 56 38" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
											    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
											        <g class="mail" sketch:type="MSLayerGroup">
											            <path d="M54.8999,2.3662 L29.6289,22.7782 C29.4449,22.9262 29.2229,23.0002 28.9999,23.0002 C28.7949,23.0002 28.5889,22.9372 28.4139,22.8102 L0.8089,2.8212 C0.2919,3.7212 -0.0001,4.7962 -0.0001,6.0002 L-0.0001,32.0002 C-0.0001,35.4202 2.5049,38.0002 5.8259,38.0002 L49.9999,38.0002 C53.3089,38.0002 55.9999,35.3082 55.9999,32.0002 L55.9999,6.0002 C55.9999,4.5872 55.5999,3.3482 54.8999,2.3662" id="Fill-1062" sketch:type="MSShapeGroup"></path>
											            <path d="M53.4502,0.9666 C52.4992,0.3466 51.3242,-0.000400000001 50.0002,-0.000400000001 L6.0002,-0.000400000001 C4.4602,-0.000400000001 3.1242,0.4686 2.1052,1.2896 L28.9672,20.7416 L53.4502,0.9666 Z" id="Fill-1063" sketch:type="MSShapeGroup"></path>
											        </g>
											    </g>
											</svg>
											contact@portigal.com
										</a>
									</div>
								</div><!--.navbar-collapse-->
							</nav>
						</div>
					</div>
				</div>
			</div><!--.main-navigation-->
		</div>
	</header>

	<div class="container page-container">
		<div id="content" class="row row-with-vspace site-content">
