<?php get_header();?>

<div class="page_content">
    <div class="container">
        <?php get_template_part('inc/breadcrumb'); ?>
        <div class="content">
            <h1 class="contacts_title"><?php the_title(); ?></h1>
            <?php if( have_rows('gruppa_kontaktov') ): ?>
                <div class="contacts_list">
                    <?php while( have_rows('gruppa_kontaktov') ): the_row(); ?>
                        <div class="item">
                            <div class="contacts_item">
                                <div>
                                    <div class="title"><?php the_sub_field('zagolovok'); ?></div>
                                    <div class="address"><?php the_sub_field('adres'); ?></div>
                                </div>
                                <ul>
                                    <li><a href="tel:<?php the_sub_field('telefon_1'); ?>"><?php the_sub_field('telefon_1'); ?></a></li>
                                    <li><a href="tel:<?php the_sub_field('telefon_2'); ?>"><?php the_sub_field('telefon_2'); ?></a></li>
                                    <li><a href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a></li>
                                </ul>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <div class="map"><img src="../img/map_image.png"/></div>
        </div>
    </div>
</div>
<?php get_template_part('inc/kp');
get_footer();?>
