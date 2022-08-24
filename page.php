<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lesinvest
 */

get_header();
?>

<div class="page_content">
    <div class="container">
        <?php get_template_part('inc/breadcrumb'); ?>
        <div class="content about_content">
            <h1 class="h2"><?php the_title(); ?></h1>
            <?php
            the_post();
            the_content();
            ?>
        </div>
    </div>
</div>

<?php get_template_part('inc/kp');
get_footer();?>
