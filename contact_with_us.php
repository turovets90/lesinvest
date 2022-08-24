<?php
/*
 Template name: Свзаться с нами
 */
get_header();?>

<div class="page_content">
    <div class="container">
        <?php get_template_part('inc/breadcrumb'); ?>
        <div class="content">
            <h1 class="contacts_title"><?php the_title(); ?></h1>
            <div class="kp_content">
                <div class="kp_row">
                    <div class="col_left">
                        <div class="desc f_20 default_txt">
                            <?php the_post();
                            the_content();
                            ?>
                        </div>
                        <div class="success_txt">
                            <p>Заявка отправлена! <span>Наш менеджер свяжется с вами в ближайшее время</span></p>
                            <button class="btn_primary btn_reset">Отправить еще</button>
                        </div>
                    </div>
                    <div class="col_right">
                        <div class="kp_form">
                            <?php echo do_shortcode('[contact-form-7 id="200" title="Связаться с нами"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>
