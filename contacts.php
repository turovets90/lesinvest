<?php
/*
 Template name: Контакты
 */
get_header();?>

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
            <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
            <div class="map" id="map"></div>

            <script type="text/javascript">
                //создаем переменные "Карта" и "Метка"
                ymaps.ready(init);
                var myMap,
                    myPlacemark;

                //Инициализируем нашу карту, задав ей координаты, устанавливаем масштаб карты
                function init(){
                    myMap = new ymaps.Map("map", {
                        center: [61.726020, 50.751121],
                        zoom: 8,
                    });

//Пишем свойства для нашей метки
                    myPlacemark = new ymaps.Placemark([61.726020, 50.751121], {
                        hintContent: '167981, Республика Коми, г. Сыктывкар, ул.1-я Промышленная, дом 72',
                        balloonContent: '167981, Республика Коми, г. Сыктывкар, ул.1-я Промышленная, дом 72'
                    }, {
                        // Опции.
                        // Необходимо указать данный тип макета. Показываем что это изображение.
                        iconLayout: 'default#image',
                        // Своё изображение иконки метки. Указываем путь до картинки
                        iconImageHref: '/wp-content/themes/lesinvest/img/map_marker.svg',
                        // Размеры метки.
                        iconImageSize: [48, 62],
                        // Смещение левого верхнего угла иконки относительно её "ножки" (точки привязки).
                        iconImageOffset: [-20, -50]
                    });
                    //Добавляем метку на карту + убираем скролл мышкой
                    myMap.geoObjects.add(myPlacemark);
                    myMap.behaviors.disable('scrollZoom');
                }
            </script>
        </div>
    </div>
</div>
<?php get_template_part('inc/kp');
get_footer();?>
