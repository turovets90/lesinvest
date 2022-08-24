<?php get_header();?>

<section class="first_screen">
    <div class="container">
        <div class="first_screen_container" style="background-image:url(<?php the_field('fonovoe_izobrazhenie'); ?>)">
            <div class="first_screen_content">
                <h1><?php the_field('pervyj_ekran_-_zagolovok'); ?></h1>
                <div class="sub_title"><?php the_field('pervyj_ekran_-_opisanie'); ?></div>
                <?php
                $link = get_field('pervyj_ekran_-_knopka');
                if( $link ):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    ?>
                    <a class="btn_primary" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section class="main_services">
    <div class="container">
        <div class="title"><?php the_field('chto_delaem_-_zagolovok'); ?></div>
        <?php if( have_rows('spisok') ): ?>
            <div class="main_services_list">
                <?php while( have_rows('spisok') ): the_row(); ?>
                    <div class="item">
                        <div class="main_services_item">
                            <div class="img" style="background-image:url(<?php the_sub_field('kartinka'); ?>)"></div>
                            <div class="h1 main_services_title"><?php the_sub_field('zagolovok'); ?></div>
                            <div class="main_services_desc"><?php the_sub_field('opisanie'); ?></div><span class="serv_btn"></span>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<section class="main_catalog">
    <div class="container">
        <div class="main_catalog_list">
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
            setup_postdata( $post );
            ?>
                <div class="main_catalog_item">
                    <div class="img" style="background-image:url(<?php the_field('izobrazhenie_dlya_slajdera_na_glavnoj', $post->ID); ?>)"></div>
                    <div class="main_catalog_item_content">
                        <div class="center">
                            <div class="d_flex">
                                <div class="title active"><?php the_title();?>
                                    <?php getPrevNext(); ?>
                                </div>
                            </div><a class="btn_primary read_more" href="<?php the_permalink(); ?>">Подробнее</a>
                        </div>
                    </div>
                </div>
            <?php }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<section class="catalog d_hide">
    <div class="container">
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
</section>
<section class="how_doing">
    <div class="container">
        <div class="h1 d_hide"><?php the_field('kak_delaem_-_zagolovok'); ?></div>
        <?php if( have_rows('kak_delaem_-_slajder') ): ?>
            <div class="how_doing_slider">
                <?php while( have_rows('kak_delaem_-_slajder') ): the_row(); ?>
                    <div class="item">
                        <div class="how_doing_item">
                            <div class="txt_block"><span><?php the_field('kak_delaem_-_zagolovok'); ?></span>
                                <div class="h1"><?php the_sub_field('zagolovok'); ?></div>
                                <div class="desc"><?php the_sub_field('opisanie'); ?></div>
                            </div>
                            <div class="img_block" style="background-image:url(<?php the_sub_field('kartinka'); ?>)"></div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php get_template_part('inc/kp');
get_footer();?>
