<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php if(get_field('header', 'options')) { the_field('header', 'options'); } ?>
<?php if(get_field('custom_css')) { ?> 
<style>
<?php the_field('custom_css'); ?>
</style>
<?php }
	
	wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
if(get_field('body','options')) { the_field('body','options'); }
	
?>
<div class="position-relative w-100 primary-navbar" style="top:0;z-index:10;">

<div class="z-1 position-relative">

<header class="position-relative" style="z-index:1;">

<!-- start of nav -->
<div class="blank-space-before-header"></div>
<nav class="position-relative pt-1 pb-1 w-100 bg-accent-secondary" style="z-index:10;padding:5px 0px;">

<?php

// echo '<div class="position-absolute w-100" style="top:0;left:0;">';
// echo get_template_part('partials/party-decoration');
// echo '</div>';
// echo '<div class="position-absolute w-100" style="top:0;left:0;height:75px;background:url(' . wp_get_attachment_image_url(2003, 'full') . ');background-repeat:repeat-x;background-size:contain;">';
// echo '</div>';

// echo '<div class="position-absolute w-100" style="height:55px;top:0;left:0;background:url(' . wp_get_attachment_image_url(2007, 'full') . ');background-repeat:repeat-x;background-size:contain;"></div>';

echo '<div class="position-absolute h-100 bg-accent-tertiary" style="bottom:0;right:0;
clip-path: polygon(0 100%, 100% 100%, 100% 0);
-webkit-clip-path: polygon(0 100%, 100% 100%, 100% 0);
-ms-clip-path: polygon(0 100%, 100% 100%, 100% 0);
-o-clip-path: polygon(0 100%, 100% 100%, 100% 0);
-moz-clip-path: polygon(0 100%, 100% 100%, 100% 0);
width:125px;"></div>';
echo '<div class="position-absolute h-100 bg-accent-quaternary" style="bottom:0;left:0;
clip-path: polygon(0 100%, 100% 100%, 0 0);
-webkit-clip-path: polygon(0 100%, 100% 100%, 0 0);
-ms-clip-path: polygon(0 100%, 100% 100%, 0 0);
-o-clip-path: polygon(0 100%, 100% 100%, 0 0);
-moz-clip-path: polygon(0 100%, 100% 100%, 0 0);
width:125px;"></div>';

?>

<div class="container">
<div class="row align-items-center justify-content-between">
	
	<?php
	echo '<div class="col-lg-1 col-md-2 col-3">';
echo '<a href="' . home_url() . '">';
$logo = get_field('logo','options');

echo wp_get_attachment_image($logo['id'],'full',"",[
	'class'=>'w-100',
	'style'=>'height:auto;'
]); 

// echo get_template_part('partials/new-logo');

// echo '<p>hello</p>';
echo '</a>';

echo '</div>';
echo '<div class="col-lg-4 col-md-6 col-9">';
echo '<span class="text-accent relation-two d-block" style="font-size:2.5rem;margin:0;line-height:1;">' . get_bloginfo('name') . '</span>';
echo '<p class="text-white d-block" style="margin:0;font-size:75%;line-height:1;">';
echo '<em>' . get_bloginfo('description') . '</em>';
echo '</p>';
echo '</div>';

?>

<div class="col-lg-7 col-md-4 col-12 d-flex justify-content-md-end justify-content-between align-items-center">
<a id="navToggle" class="nav-toggle" style="margin-right:50px;">
<div>
<div class="line-1 bg-accent"></div>
<div class="line-2 bg-accent"></div>
<div class="line-3 bg-accent"></div>
</div>
</a>
<div class="nav-items mobile-hidden" id="">

<?php
wp_nav_menu(array(
'menu' => 'primary',
'menu_class'=>'menu d-flex list-unstyled mb-0'
)); 



echo '</div>';
	

// 	start of search icon

echo '<div class="position-relative search-icon open-modal ml-4" style="" id="search-icon">';
echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 117.11 117.1" class="" style="height:45px;width:45px;"><defs><style>.cls-1{fill:#edb91d;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="ehXgD7.tif"><path class="cls-1" d="M75.63,68l7.84,7.74a13.28,13.28,0,0,0-7.55,7.47L68.3,75.44C57,83.7,44.91,86.32,31.77,83.07A41,41,0,0,1,7.57,66.28,42.21,42.21,0,1,1,75.63,68ZM11.15,42.21A31.06,31.06,0,1,0,42.26,11.13,31,31,0,0,0,11.15,42.21Z"></path><path class="cls-1" d="M117.11,108.2a9,9,0,0,1-5.55,8.1,8.84,8.84,0,0,1-10.1-2c-4.83-4.78-9.62-9.6-14.43-14.41-1.88-1.88-3.8-3.73-5.63-5.66a9.09,9.09,0,0,1,5.79-15.42,8.34,8.34,0,0,1,6.9,2.43q10.34,10.23,20.57,20.56A9,9,0,0,1,117.11,108.2Z"></path><path class="cls-1" d="M14.83,41.43A27.43,27.43,0,0,1,41.44,14.82c1.92-.08,3,1.06,2.39,2.48-.45,1-1.33,1.06-2.26,1.1A23.93,23.93,0,0,0,18.41,41.68c-.08,1.73-1,2.65-2.32,2.19S14.77,42.5,14.83,41.43Z"></path></g></g></g></svg>';
echo '</div>';

// 	end of search icon


echo '<div id="navMenuOverlay" class="position-fixed z-2"></div>';
echo '<div class="col-lg-4 col-md-8 col-11 nav-items bg-accent-secondary desktop-hidden" id="navItems">';

echo '<div class="position-absolute w-100" style="height:50px;top:0;left:0;background:url(' . wp_get_attachment_image_url(2007, 'full') . ');background-repeat:repeat-x;background-size:contain;    background-position:top;"></div>';
echo '<div class="position-absolute w-100" style="height:50px;bottom:0;left:0;background:url(' . wp_get_attachment_image_url(2006, 'full') . ');background-repeat:repeat-x;background-size:contain;    background-position:bottom;"></div>';

echo '<div class="" style="padding-top:65px;">';

echo '<div class="close-menu">';
echo '<div>';
echo '<span id="navMenuClose" class="close h1">X</span>';
echo '</div>';
echo '</div>';

echo '<div class="d-flex align-items-center">';
echo '<a href="' . home_url() . '">';

$logo = get_field('logo','options'); 
if($logo){
	echo wp_get_attachment_image($logo['id'],'full',"",[
		'class'=>'',
		'style'=>'width:75px;height:auto;'
	]); 

}

echo '</a>';

echo '<div style="margin-left:15px;">';
echo '<span class="text-accent relation-two d-block" style="font-size:1.75rem;margin:0;line-height:1;">' . get_bloginfo('name') . '</span>';
echo '<p class="text-white d-block" style="margin:0;font-size:55%;line-height:1;">';
echo '<em>' . get_bloginfo('description') . '</em>';
echo '</p>';
echo '</div>';

echo '</div>';

echo '</div>';
wp_nav_menu(array(
'menu' => 'primary',
'menu_class'=>'menu list-unstyled mb-0'
)); 

echo get_template_part('partials/si');


echo '<span class="h2 d-block text-white" style="font-size:1.25rem;margin-bottom:1rem;padding-top:1.5rem;">Business Owner Tips Newsletter</span>';
echo do_shortcode('[gravityform id="3" title="false" description="false" ajax="true"]');

echo '</div>'; // end of col for navigation

	?>
	
</div>


</div>
</div>

</nav>
<!-- end of nav -->
</header>
<?php if( !is_front_page() && !is_search() && !is_home() && !is_single() ) { 

	
echo '<section class="hero position-relative" style="padding:50px 0px;">';

echo '<div class="sunburst">
<div class="outer">
	<b></b><b></b><b></b><b></b><b></b><b></b><b></b><b></b><b></b><b></b>
</div>
</div>';

echo '<div class="container">';

?>

<div class="row">
<div class="col-md-9">
<?php if(is_page() && !is_front_page() ){ ?>
<h1 class="h3 ml2 d-inline-block"><?php the_title(); ?></h1>

<div class="">
<?php the_field('subtitle'); ?>
</div>
<?php 
$linkCTAHeader = get_field('cta_button');
if( $linkCTAHeader ): 
$linkCTAHeader_url = $linkCTAHeader['url'];
$linkCTAHeader_title = $linkCTAHeader['title'];
$linkCTAHeader_target = $linkCTAHeader['target'] ? $linkCTAHeader['target'] : '_self';
?>
<a href="<?php echo $linkCTAHeader_url; ?>" target="<?php echo $linkCTAHeader_target; ?>" class="btn btn-lg bg-accent-gradient text-white mt-4 br-25"><?php echo $linkCTAHeader_title; ?></a>
<?php endif; ?>
<?php } elseif(is_single()){ ?> 

<?php } elseif(is_author()){ ?> 
<h1 class="">Author: <?php the_author(); ?></h1>
<?php } elseif(is_tag()){ ?> 
<h1 class=""><?php single_tag_title(); ?></h1>
<?php } elseif(is_category()){ ?> 
<h1 class=""><?php single_cat_title(); ?></h1>
<?php } elseif(is_archive()){ ?> 
<h1 class=""><?php the_archive_title(); ?></h1>
<?php } ?>
</div>
</div>
</div>
</section>
<?php } ?>
</div>
</div>
