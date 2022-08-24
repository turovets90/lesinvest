<?php
/*
 Template name: Продукт
 */
get_header();?>


<div class="page_content">
    <div class="container">
        <?php get_template_part('inc/breadcrumb'); ?>
        <div class="content">
            <div class="c_row product_row">
                <?php if(get_the_post_thumbnail()): ?>
                    <div class="col_left">
                        <div class="product_img"><img src="<?php echo get_the_post_thumbnail_url(); ?>"/></div>
                    </div>
                <?php endif; ?>
                <div class="col_right">
                    <h1 class="product_title"><?php the_title(); ?></h1>
                   <?php
                    the_post();
                    the_content();
                   ?>
                </div>
            </div>

            <?php if(get_field('opisanie_-_tekst')): ?>
                <div class="c_row">
                    <div class="col_left">
                        <h2><?php the_field('opisanie_-_zagolovok'); ?></h2>
                    </div>
                    <div class="col_right">
                        <?php the_field('opisanie_-_tekst'); ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if( have_rows('sortirovka_po_gostu_-_spisok') ): ?>
                <div class="c_row last">
                    <div class="col_left">
                        <h2><?php the_field('sortirovka_po_gostu_-_zagolovok'); ?></h2>
                    </div>
                    <div class="col_right">
                        <div class="gost_list">
                            <?php while( have_rows('sortirovka_po_gostu_-_spisok') ): the_row(); ?>
                                <div class="item">
                                    <div class="gost_item">
                                        <div class="txt_block">
                                            <div class="gost_title"><?php the_sub_field('zagolovok'); ?></div>
                                            <div class="gost_desc"><?php the_sub_field('opisanie'); ?></div>
                                        </div>
                                        <picture><img src="<?php the_sub_field('kartinka'); ?>"/></picture>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if( have_rows('gotovaya_produkcziya_-_galereya') ): ?>
                <div class="gallery_block">
                    <h2><?php the_field('gotovaya_produkcziya_-_zagolovok'); ?></h2>
                    <div class="gallery_list">
                        <?php while( have_rows('gotovaya_produkcziya_-_galereya') ): the_row(); ?>
                            <div class="item">
                                <picture><a href="<?php the_sub_field('kartinka'); ?>"><img src="<?php the_sub_field('kartinka'); ?>"/></a></picture>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>


<?php get_template_part('inc/kp');
get_footer();?>
