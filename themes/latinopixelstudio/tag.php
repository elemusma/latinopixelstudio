<?php get_header(); ?>
<section class="body" style="padding:25px 0px;">
<div class="container">
<div class="row">
<div class="col-lg-9 col-md-8">
    <div class="row">
        <?php 
$tag = get_queried_object();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array('posts_per_page' => 10, 'post_type' => 'post', 'tag_slug__in' => $tag->slug, 'paged' => $paged );
query_posts($args); ?>
<!-- the loop -->
<?php if ( have_posts() ) : while (have_posts()) : the_post();
echo get_template_part('partials/blogs-query');
endwhile; ?>
</div>
</div>
<?php get_template_part('partials/sidebar'); ?>
<!-- pagination -->
<div class="col-md-12 text-center pt-5">
<?php echo paginate_links(array(
'show_all' => true,
'prev_text' => '&#60;',
'next_text' => '&#62;'
)); ?>
</div>
<?php else : ?>
<!-- No posts found -->
<?php endif; ?>
</div>
</div>
</section>
<?php get_footer(); ?>