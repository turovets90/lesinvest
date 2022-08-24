<?php
/*
 Template name: Продукция
 */
get_header();?>

<section class="page_content">
    <div class="container">
        <?php get_template_part('inc/breadcrumb'); ?>
        <h1 class="catalog_title"><?php the_title(); ?></h1>
        <div class="catalog">
            <div class="catalog_list">
                <?php
                $pages = get_pages( [
                    'sort_order'   => 'ASC',
                    'sort_column'  => 'date',
                    'child_of'     => 0,
                    'parent'       => 23,
                    'post_type'    => 'page',
                    'post_status'  => 'publish',
                ] );
                foreach( $pages as $post ){
                    setup_postdata( $post );?>
                    <div class="item">
                        <a class="catalog_item" href="<?php the_permalink(); ?>">
                            <div class="img" style="background-image:url(<?php the_field('izobrazhenie_dlya_kataloga', $post->ID); ?>)"></div>
                            <div class="catalog_item_content">
                                <span class="read_more">Побробнее</span>
                                <div class="title"><?php the_title(); ?></div>
                            </div>
                        </a>
                    </div>

                <?php }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>


<?php get_template_part('inc/kp');
get_footer();?>