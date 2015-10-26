<?php // Set Page Based Variables

//$homeImage = 'nav_home.gif';
//$servicesImage = 'nav_services.gif';

//Home
if (is_front_page()) {$homeImage = 'nav_home_o.gif'; $title='Portigal Consulting | Discover and act on new customer insights';} 
else {$homeImage = 'nav_home.gif';}


//Services
if (is_page('services')) {$servicesImage = 'nav_services_o.gif';$title='Customer Research and Training Services | Portigal Consulting';} 
else {$servicesImage = 'nav_services.gif';}

//Clients
if (is_page('clients')) {$clientsImage = 'nav_clients_o.gif';$title='Client List | Portigal Consulting';} 
else {$clientsImage = 'nav_clients.gif';}

//Contact
if (is_page('contact')) {$contactImage = 'nav_contact_o.gif';$title='Contact Us | Portigal Consulting';} 
else {$contactImage = 'nav_contact.gif';}

//Speaking
if (is_page('speaking')) {$speakingImage = 'nav_speaking_o.gif';$title='Speaking | Portigal Consulting';} 
else {$speakingImage = 'nav_speaking.gif';}

//About
if (is_page('about-us')) {$aboutImage = 'nav_about_us_o.gif';$title='About Us | Portigal Consulting';} 
else {$aboutImage = 'nav_about_us.gif';}



//Blog
if (is_paged() || is_archive() || is_search() || get_post_meta($post->ID, 'series_part', true)) {$blogImage = 'nav_blog_o.gif';$title='All This ChittahChattah | Portigal Consulting Blog';} 
elseif (is_single()) {$blogImage = 'nav_blog_o.gif';$sdacTitle = wp_title('',false,'');$title='All This ChittahChattah | '.$sdacTitle;}
else {$blogImage = 'nav_blog.gif';}

if (get_post_meta($post->ID, 'series_part', true)) {$blogImage = 'nav_blog_o.gif';$sdacTitle = str_replace('&laquo;', '',wp_title('',false,''));$title='All This ChittahChattah | '.$sdacTitle;}
else {$blogImage = 'nav_blog.gif';}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
	<meta name="keywords" content="Steve Portigal, strategy, consulting, product design, design, ethnography, ethnographic research, insight, culture, understanding, Portigal">
	<meta name="description" content="Portigal Consulting, bringing together user research (ethnography), design and business strategy">
	<meta name="copyright" content="2001-2015 Steve Portigal">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<script language="javascript" type="text/javascript" src="http://portigal.com/scripts.js"></script>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<?php wp_head(); ?>
	<!-- WP Engine -->
</head>

<body <?php body_class(); ?>>

<div id="siteWrapper">

<div id="headerBanner">
		<?php if (is_front_page()):?>
	
		<img src="<?php bloginfo('url');?>/HomeBanner.jpg" usemap="#nav" border="0">
		<map name="nav"><area shape="rect" coords="0,0,155,102" href="http://www.portigal.com"></map>
		
		<?php elseif (is_page('about-us')):?>
		<img src="<?php bloginfo('url');?>/AboutUsBanner.jpg" width="800" height="171" usemap="#nav" border="0">
		<map name="nav"><area shape="rect" coords="0,0,155,102" href="http://www.portigal.com"></map>
		
		<?php elseif (is_page('contact')):?>
		<img src="<?php bloginfo('url');?>/ContactBanner.jpg" width="800" height="171" usemap="#nav" border="0">
		<map name="nav"><area shape="rect" coords="0,0,155,102" href="http://www.portigal.com"></map>
		
		<?php elseif (is_page('clients')):?>
		<img src="<?php bloginfo('url');?>/ClientsBanner.jpg" width="800" height="171" usemap="#nav" border="0">
		<map name="nav"><area shape="rect" coords="0,0,155,102" href="http://www.portigal.com"></map>
		
		<?php elseif (is_page('services')):?>
		<img src="<?php bloginfo('url');?>/ServicesBanner.jpg" width="800" height="171" usemap="#nav" border="0">
		<map name="nav"><area shape="rect" coords="0,0,155,102" href="http://www.portigal.com"></map>
		
		<?php elseif (is_page('speaking')):?>
		<img src="<?php bloginfo('url');?>/SpeakingBanner.gif" width="800" height="171" usemap="#nav" border="0">
		<map name="nav"><area shape="rect" coords="0,0,155,102" href="http://www.portigal.com"></map>
		
		<?php else :?>
		<img src="<?php bloginfo('url');?>/BlogBanner.jpg" width="800" height="171"usemap="#nav" border="0">
		<map name="nav"><area shape="rect" coords="0,0,155,102" href="http://www.portigal.com"></map>
		

		<?php endif;?>
	</div>
	
	
	<div id="headerNav">
		<ul class="main_nav" id="main_nav">
			<li id="nav-home"><a href="<?php echo home_url();?>">Home</a></li>
			<li id="nav-services"><a href="<?php echo home_url();?>/services">Services</a></li>
			<li id="nav-clients"><a href="<?php echo home_url();?>/clients">Clients</a></li>
			<li id="nav-contact"><a href="<?php echo home_url();?>/contact">Contact</a></li>
			<li id="nav-speaking"><a href="<?php echo home_url();?>/speaking">Speaking</a></li>
		</ul>
		<ul class="main_nav" id="about_blog">
			<li id="nav-about"><a href="<?php echo home_url();?>/about-us">About Us</a></li>
			<li id="nav-blog"><a href="<?php echo home_url();?>/blog">Blog</a></li>
		</ul>
	</div>
	
	<div id="siteContent">
