<?php
/**
 * Template Name: Contact
 */
get_header(); ?>
<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sections/contact.css"> -->
<section class="position-relative" style="padding:25px 0px;" id="hire-me">

<?php
// echo '<div class="sunburst">
// <div class="outer">
// 	<b></b><b></b><b></b><b></b><b></b><b></b><b></b><b></b><b></b><b></b>
// </div>
// </div>';
?>

    <div class="container pb-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
            </div>
            <div class="col-md-6">
                <?php the_field('right_column'); ?>
            </div>
        </div>
    </div>
</section>
<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/contact.js"></script> -->
<?php get_footer(); ?>