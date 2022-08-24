<?php
/*
 Template name: Производство
 */
get_header();?>

<div class="page_content">
    <div class="container">
        <?php get_template_part('inc/breadcrumb'); ?>
        <div class="content">
            <div class="c_row">
                <div class="col_left">
                    <h1 class="h2"><?php the_title(); ?></h1>
                </div>
                <div class="col_right">
                  <?php
                  the_post();
                  the_content();
                  ?>
                </div>
            </div>
            <div class="production_image"><img src="<?php the_field('kartinka_1'); ?>"/></div>
            <div class="production_desc"><?php the_field('tekst'); ?></div>
            <div class="ellipse_blocks"><img src="<?php the_field('kartinka_2'); ?>"/></div>
            <?php if( have_rows('proizvodstvo_-_slajder') ): ?>
                <div class="production_slider">
                    <?php while( have_rows('proizvodstvo_-_slajder') ): the_row(); ?>
                        <div class="production_slider_item">
                            <div class="production_slider_item_content"><span><?php the_sub_field('sinij_tekst'); ?></span>
                                <div class="title h1"><?php the_sub_field('zagolovok'); ?></div>
                                <div class="desc"><?php the_sub_field('opisanie'); ?></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_template_part('inc/kp');
 get_footer();?>
