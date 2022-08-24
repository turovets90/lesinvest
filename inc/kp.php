<section class="kp">
    <div class="container">
        <div class="kp_content">
            <div class="kp_row">
                <div class="col_left">
                    <div class="default_txt">
                        <div class="h1"><?php the_field('kommercheskoe_predlozhenie_-_zagolovok',11); ?></div>
                        <div class="desc"><?php the_field('kommercheskoe_predlozhenie_-_tekst', 11); ?></div>
                    </div>
                    <div class="success_txt">
                        <p>Заявка отправлена! <span>Наш менеджер свяжется с вами в ближайшее время</span></p>
                        <button class="btn_primary btn_reset">Отправить еще</button>
                    </div>
                </div>
                <div class="col_right">
                    <div class="kp_form">
                       <?php echo do_shortcode('[contact-form-7 id="6" title="Коммерческое предложение"]');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>