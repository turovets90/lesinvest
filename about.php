<?php
/*
 Template name: О компании
 */
get_header();?>

<div class="page_content">
    <div class="container">
        <?php get_template_part('inc/breadcrumb'); ?>
        <div class="content about_content">
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

            <?php if( have_rows('preimushhestva') ): ?>
                <div class="adv_block">
                    <?php while( have_rows('preimushhestva') ): the_row(); ?>
                        <div class="item">
                            <div class="title"><?php the_sub_field('zagolovok'); ?></div>
                            <div class="desc"><?php the_sub_field('opisanie'); ?></div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

            <div class="c_row">
                <div class="col_left">
                    <h2><?php the_field('rukovodstvo_-_zagolovok'); ?></h2>
                </div>
                <div class="col_right">
                    <?php if( have_rows('rukovodstvo_-_spisok') ): ?>
                        <div class="leaders">
                            <?php while( have_rows('rukovodstvo_-_spisok') ): the_row(); ?>
                                <div class="item">
                                    <div class="leaders_item">
                                        <picture><img src="<?php the_sub_field('foto'); ?>"/></picture>
                                        <div class="title"><?php the_sub_field('imya'); ?></div>
                                        <div class="desc"><?php the_sub_field('dolzhnost'); ?></div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="c_row">
                <div class="col_left">
                    <h2><?php the_field('strany_-_zagolovok'); ?></h2>
                </div>
                <div class="col_right">
                    <div class="map2"><img src="<?php the_field('strany_-_karta'); ?>"/></div>
                </div>
            </div>
            <div class="c_row">
                <div class="col_left">
                    <h2><?php the_field('proizvodstvo_-_zagolovok'); ?></h2>
                </div>
                <div class="col_right">
                    <?php the_field('proizvodstvo_-_tekst'); ?>
                </div>
            </div>
            <?php
            $video = get_field('o_kompanii_-_video');
            if( $video ): ?>
                <div class="video_container"><span class="play_btn" id="play_btn"></span>
                    <video id="video" src="<?php echo $video['url']; ?>"></video>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_template_part('inc/kp');
get_footer();?>
