<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package lesinvest
 */

get_header();
?>
<div class="page_content">
    <div class="container">
        <?php get_template_part('inc/breadcrumb'); ?>
        <div class="content about_content">

            <?php if ( have_posts() ) : ?>

                <h1 class="h2">
                    <?php
                    /* translators: %s: search query. */
                    printf( esc_html__( 'Результаты поиска для: %s', 'lesinvest' ), '<span>' . get_search_query() . '</span>' );
                    ?>
                </h1>

                <?php
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();

                    /**
                     * Run the loop for the search to output the results.
                     * If you want to overload this in a child theme then include a file
                     * called content-search.php and that will be used instead.
                     */
                    get_template_part( 'template-parts/content', 'search' );

                endwhile;
                the_posts_navigation();
                else :
                get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>
        </div>
    </div>
</div>
<?php get_template_part('inc/kp');
get_footer();?>
