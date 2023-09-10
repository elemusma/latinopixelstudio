<?php
echo '<footer style="position:relative;">';
echo '<section class="bg-accent-secondary text-white" style="padding:50px 0px;">';

echo '<div class="position-absolute w-100" style="height:50px;bottom:0;left:0;background:url(' . wp_get_attachment_image_url(2006, 'full') . ');background-repeat:repeat-x;background-size:contain;"></div>';

?>
<div class="container">
<div class="row">
<!-- start of col -->
<div class="col-lg-4 col-md-6">
<div class="col-md-5 col-4">
<a href="<?php echo home_url(); ?>">
<?php $logo = get_field('logo','options');
// echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-50 h-auto']); 
// echo get_template_part('partials/new-logo');
?>
</a>
</div>
<div class="pt-4">
<div class="small">
<?php the_field('website_message','options'); ?>
</div>
<?php
echo get_template_part('partials/si');
?>
</div>
</div>
<!-- end of col -->
<!-- start of col -->
<!-- <div class="col-lg-2 col-6">
<h5>CONTACT INFO</h5>
<div class="pt-2">
<a href="tel:+1<?php the_field('phone','options'); ?>"><small><?php the_field('phone','options'); ?></small></a>
</div>
<div class="pt-2">
<a href="mailto:<?php the_field('email','options'); ?>"><small><?php the_field('email','options'); ?></small></a>
</div>
<div class="pt-2">
<small><?php the_field('address','options'); ?></small>
</div>
<div class="pt-2">
<a href="https://meetings.hubspot.com/efrain-lemus" target="_blank" rel="noopener noreferrer"><small>Schedule a Call with Me</small></a>
</div>
</div> -->
<!-- end of col -->
<!-- start of col -->
<div class="col-lg-3 col-md-6 pt-lg-0 pt-5">
<h5>Recent Posts</h5>
<?php
$recentBlog = new WP_Query(array(
'posts_per_page' => 5,
'post_type' => 'post'
)); ?>
<ul class="list-unstyled">
<?php while($recentBlog->have_posts()){
$recentBlog->the_post(); ?>
<li class="" style="line-height:1;padding-bottom:9px;">
    <a href="<?php the_permalink(); ?>" style=""><?php the_title(); ?></a></li>
<?php } wp_reset_postdata(); ?>
</ul>
</div>
<!-- end of col -->
<?php
// start of col
echo '<div class="col-lg-3 col-md-6 pt-lg-0 pt-5">';
echo '<h5>Tools</h5>';

wp_nav_menu(array(
    'menu' => 'Tools',
    'menu_class'=>'menu list-unstyled mb-0 small'
    )); 

// echo '<ul class="list-unstyled">';
//     echo '<li><a href="' . home_url() . '/random-password-generator-with-javascript/"><small></small>Random Password Generator with JavaScript</a></li>';
// echo '</ul>';

echo '</div>';
// end of col
?>
<!-- start of col -->
<!-- <div class="col-lg-3 col-md-6 pt-lg-0 pt-5">
<div class="badge-base LI-profile-badge" data-locale="en_US" data-size="large" data-theme="light" data-type="HORIZONTAL" data-vanity="efrain-tadeo-lemus-martinez" data-version="v1"><a class="badge-base__link LI-simple-link" href="https://www.linkedin.com/in/efrain-tadeo-lemus-martinez?trk=profile-badge">Efrain Tadeo Lemus Martinez</a></div>
</div> -->
<!-- end of col -->
</div>
</div>
</section>
	
	<div class="modal-content search-icon position-fixed w-100 h-100 z-3" style="opacity:0;">
    <div class="bg-overlay"></div>
    <div class="bg-content">
    <div class="bg-content-inner">
    <div class="close text-white" id="">X</div>
					
                    <span class="h3 text-white">Search for:</span>
                    <?php echo get_search_form(); ?>
	</div>
    </div>
    </div>
			
	
</footer>
<?php if(get_field('footer', 'options')) { the_field('footer', 'options'); } ?>
<?php wp_footer(); ?>
</body>
</html>