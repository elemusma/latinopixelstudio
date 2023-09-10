<?php
/**
 * Template Name: Content Page
 */
get_header(); 
global $post;
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sections/products-single.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sections/intro.css">
<?php if ( $post->post_parent ) { ?>
<section><a href="<?php echo get_permalink( $post->post_parent ); ?>" class="btn btn-primary position-fixed text-uppercase h1 btn-go-back">Go Back to <?php echo get_the_title( $post->post_parent ); ?></a></section>
<?php } ?>

<?php 
if ( ! post_password_required( $post ) ) {
?>
<section class="about-section pt-5 pb-5 position-relative bg-accent texture-bg">
<div class="background-image"></div>
<div class="container pt-5 mb-5">
<div class="row pb-5 mb-5">
<div class="col-md-5 img--main">
<?php 
$image = get_field('main_image'); 
if($image) { ?> 
<?php echo wp_get_attachment_image($image['id'],'full',"",['class'=>'w-100 h-100']); ?>
<?php } else {
the_post_thumbnail('full',array('class'=>'w-100 h-100'));
} 
?>
</div>
<div class="col-lg-6 col-md-6 sm-text-center about"> 
<div class="about-first-half">
<div class="about-before"></div>
<div class="about-middle"></div>
</div>
<div class="about-after"></div>
<div class="about-details pt-5 pl-4 pr-4">
<div class="page details">
<!-- <h4 class="bodoni">Best in Denver</h4> -->
<h5 class=""><?php the_field('main_title'); ?></h5>
</div>
<!-- <h6><em>High tech, intelligent and cutting edge.</em></h6> -->
<?php the_field('description'); ?>
</div>
</div>
</div>
</div>
</section>

<!-- start of repeater field section -->
<?php  if( have_rows('content') ):
$bgImage = get_field('background_image'); ?>
<?php if($bgImage) { ?> 
<section class="pt-5 pb-5" style="background:url('<?php echo $bgImage['url']; ?>');background-size:cover;">
<?php } else { ?> 
<section class="pt-5 pb-5" style="background:url('<?php echo wp_get_attachment_image_url(387,'full'); ?>');background-size:cover;">
<?php } ?>
<div class="pt-5 pb-5">
<div class="container" style="border-top: 40px solid #881600;border-bottom: 40px solid #881600;">
<?php while ( have_rows('content') ) : the_row(); ?>
<?php $contentQuote = get_sub_field('content_or_quote'); ?>
<?php if($contentQuote == 'Content'){ ?> 
<div class="row align-items-center services-content-row position-relative col-content">
<div class="col-md-6 services-content-text">
<div class="inner-content p-5">
<h3><?php the_sub_field('title'); ?></h3>
<?php the_sub_field('content'); ?>
</div>
</div>
<div class="col-md-6 p-0 services-content-img">
<div class="">
<?php $contentImage = get_sub_field('image');
echo wp_get_attachment_image($contentImage['id'], 'full', "",['class'=>'w-100 h-100']); ?>
</div>
</div>
</div>
<?php } else { ?> 
<div class="row align-items-center position-relative text-white bg-accent-gold">
<div class="col-md-12 pt-5 pb-5 mb-2">
<div style="margin-bottom:-1rem;">
<?php the_sub_field('quote'); ?>
</div>
</div>
</div>
<div class="row align-items-center services-content-row position-relative"></div>
<?php } ?>
<?php endwhile; ?>
</div>
</div>
</section>
<?php endif; ?>
<!-- end of repeater field section -->

<?php } else {
// we will show password form here ?>

<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <?php echo get_the_password_form(); ?>             
            </div>
        </div>
    </div>
</section>
   
<?php } get_footer(); ?>