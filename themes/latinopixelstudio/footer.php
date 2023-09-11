<?php
echo '<footer style="position:relative;">';
echo '<section class="bg-accent-secondary text-white" style="padding:50px 0px 75px;">';

echo '<div class="position-absolute w-100" style="height:50px;bottom:0;left:0;background:url(' . wp_get_attachment_image_url(2006, 'full') . ');background-repeat:repeat-x;background-size:contain;    background-position:bottom;"></div>';

?>
<div class="container">
<div class="row">
<!-- start of col -->
<?php
echo '<div class="col-lg-3 col-md-6" style="padding-bottom:1.5rem;">';
echo '<div class="">';

// echo '<div class="d-flex align-items-center">';
echo '<a href="' . home_url() . '">';

$logo = get_field('logo','options'); 
if($logo){
	echo wp_get_attachment_image($logo['id'],'full',"",[
		'class'=>'',
		'style'=>'width:75px;height:auto;'
	]); 

}

echo '</a>';

// echo '<div style="margin-left:15px;">';
// echo '<span class="text-accent relation-two d-block" style="font-size:2.5rem;margin:0;line-height:1;">' . get_bloginfo('name') . '</span>';
// echo '<p class="text-white d-block" style="margin:0;font-size:75%;line-height:1;">';
// echo '<em>' . get_bloginfo('description') . '</em>';
// echo '</p>';
// echo '</div>';

// echo '</div>';

echo '</div>';
?>
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
<div class="col-lg-3 col-md-6 pt-lg-0 pt-5">
<span class="h2" style="font-size:1.5rem;">Recent Posts</span>
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
echo '<span class="h2" style="font-size:1.5rem;">Tools</span>';

wp_nav_menu(array(
    'menu' => 'Tools',
    'menu_class'=>'menu list-unstyled mb-0 small'
    )); 

echo '</div>';
// end of col

// start of col
echo '<div class="col-lg-3 col-md-6 pt-lg-0 pt-5">';
echo '<span class="h2 d-block" style="font-size:1.5rem;margin-bottom:1rem;">Newsletter</span>';
echo '<p><small>Receive tips on how to make your day-to-day as a business owner easier.</small></p>';

echo do_shortcode('[gravityform id="3" title="false" description="false" ajax="true"]');

echo '</div>';
// end of col
?>

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