<?php
/**
 * Template Name: Skills
 */
get_header(); 

wp_enqueue_style('skills', get_theme_file_uri('css/sections/skills.css'));

?>

<section class="skills" style="padding:25px 0px;">
    <div class="container">
    <?php if(have_rows('skills_sections')): while(have_rows('skills_sections')): the_row(); ?>
        <div class="row justify-content-center" style="padding-bottom:1.5rem;">
        <div class="col-12 text-center" style="padding:1rem;">
        <h3><?php the_sub_field('title'); ?></h3>
        <div class="row justify-content-center">
        <div class="col-md-9">
        <?php 
        if(get_sub_field('content')){
        the_sub_field('content'); 
        }
        ?>
        </div>
        </div>
        </div>
        <?php if(have_rows('individual_skills')): while(have_rows('individual_skills')): the_row(); ?>
        <div class="col-md-3 col-md-6 col-skills" style="margin-bottom:1.5rem;">
        <div class="position-relative col-interior bg-white h-100" style="box-shadow:0 20px 30px rgba(0,0,0,.1);padding:1rem .75rem;">
        <h4><?php the_sub_field('title'); ?></h4>
        <h5 class="text-gradient h3"><?php the_sub_field('highlight'); ?></h5>
        <hr>
        <?php 
        if(get_sub_field('content')){
        the_sub_field('content'); 
        }
        ?>
        </div>
        </div>
        <?php endwhile; else : endif; ?>
        </div>
        <?php endwhile; else : endif; ?>

    </div>
</section>
<?php get_footer(); ?>