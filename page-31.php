<?php get_header();?>

<div class="page_content">
    <div class="container">
        <?php get_template_part('inc/breadcrumb'); ?>
        <div class="content">
            <h1 class="contacts_title"><?php the_title(); ?></h1>
            <div class="kp_content">
                <div class="kp_row">
                    <div class="col_left">
                        <div class="desc f_20">Работаем с крупными заказчиками. У вас есть вопросы о продукции или хотите получить подробную информацию — заполните форму, и мы свяжемся с вами в ближайшее время.</div>
                    </div>
                    <div class="col_right">
                        <div class="kp_form">
                            <form>
                                <div class="row">
                                    <div class="col w_50">
                                        <label>Ваше имя</label>
                                        <input class="form_control" type="text" placeholder="Ваше имя"/>
                                    </div>
                                    <div class="col w_50">
                                        <label>Название организации</label>
                                        <input class="form_control" type="text" placeholder="Введите название"/>
                                    </div>
                                    <div class="col w_50">
                                        <label>Тип продукта</label>
                                        <select class="form_control select2">
                                            <option>Выберите из списка</option>
                                            <option>Тип продукта 1</option>
                                            <option>Тип продукта 2</option>
                                            <option>Тип продукта 3</option>
                                            <option>Тип продукта 4</option>
                                        </select>
                                    </div>
                                    <div class="col w_50">
                                        <label>Объём поставки в м3</label>
                                        <input class="form_control" type="text" placeholder="0"/>
                                    </div>
                                    <div class="col w_50">
                                        <label>Страна</label>
                                        <select class="form_control select2">
                                            <option>Выберите страну</option>
                                            <option>Город 1</option>
                                            <option>Город 2</option>
                                            <option>Город 3</option>
                                            <option>Город 4</option>
                                            <option>Город 5</option>
                                            <option>Город 6</option>
                                            <option>Город 7</option>
                                            <option>Город 8</option>
                                            <option>Город 9</option>
                                            <option>Город 10</option>
                                        </select>
                                    </div>
                                    <div class="col w_50">
                                        <label>Город</label>
                                        <input class="form_control" type="text" placeholder="Введите название"/>
                                    </div>
                                    <div class="col w_50">
                                        <label>Номер телефона</label>
                                        <input class="form_control" type="text" placeholder="+7 (___) ___ __ __"/>
                                    </div>
                                    <div class="col w_50">
                                        <label>Email</label>
                                        <input class="form_control" type="text" placeholder="Введите email"/>
                                    </div>
                                    <div class="col w_100">
                                        <label>Комментарий</label>
                                        <textarea class="form_control" placeholder="Если у вас есть вопрос, напишите его тут"></textarea>
                                    </div>
                                    <div class="col">
                                        <div class="ai_center">
                                            <button class="btn_primary" type="submit">Оставить заявку</button>
                                            <div class="agree">Оставляя заявку вы соглашаетесь с политикой конфинденциальности</div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>
