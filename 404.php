<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
            <p>Страница не найдена. Запрашиваемая страница не найдена или была перемещена по другому адресу</p>
            <?php get_search_form(); ?>
            <ul class="all_pages">
                <?php wp_list_pages( ) ?>
            </ul>
        </div>
    </div>
</div>

<?php get_template_part('inc/kp');
get_footer();?>
