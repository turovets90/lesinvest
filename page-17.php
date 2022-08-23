<?php get_header();?>
<div class="page_content">
    <div class="container">
        <?php get_template_part('inc/breadcrumb'); ?>
        <div class="content">
            <div class="c_row sectificates_row">
                <div class="col_left">
                    <h1 class="h2"><?php the_title(); ?></h1>
                </div>
                <div class="col_right">
                    <?php if( have_rows('sertifikaty') ): ?>
                        <?php
                        $i=1;
                        while( have_rows('sertifikaty') ): the_row(); ?>
                            <div class="collapse_card <?php echo ($i==1)?'act':''?>">
                                <div class="card_head"><?php the_sub_field('zagolovok'); ?></div>
                                <div class="card_body">
                                <?php if( have_rows('spisok_izobrazhenij') ): ?>
                                    <div class="d_flex">
                                        <?php while( have_rows('spisok_izobrazhenij') ): the_row(); ?>
                                            <picture>
                                                <a href="<?php the_sub_field('kartinka'); ?>">
                                                    <img src="<?php the_sub_field('kartinka'); ?>"/>
                                                </a>
                                            </picture>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                                </div>
                            </div>
                        <?php
                        $i++;
                        endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('inc/kp');

get_footer();?>
