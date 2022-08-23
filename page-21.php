<?php get_header();?>

<div class="page_content">
    <div class="container">
        <?php get_template_part('inc/breadcrumb'); ?>
        <div class="content about_content">
            <div class="c_row">
                <div class="col_left">
                    <h1 class="h2"><?php the_title(); ?></h1>
                </div>
                <div class="col_right">
                    <p>Наша компания развивается каждый день и за 11 лет прошла огромный путь от небольшого предприятия до одного из крупнейших производителей пиломатериалов в регионе и вышла на ежегодные объемы стопроцентной переработки древесины в 120 тыс. м3, заготавливаемой в Республике Коми. Наша основная миссия: от заготовки леса до готовой продукции — стопроцентная переработка леса и нулевая утилизация продукции на полигоны ТБО.</p>
                    <p>Мы прочно стоим на ногах, являемся партнером государства в его проектах, развиваемся каждый день и даём рабочие места сотням людей. При этом мы клиентоориентированны и имеем гибкий подход к клиенту. Мы любим клиентов и заинтересованы во взаимовыгодном сотрудничестве.</p>
                </div>
            </div>
            <div class="adv_block">
                <div class="item">
                    <div class="title">11 лет</div>
                    <div class="desc">Рекомендуем себя как профессионалы</div>
                </div>
                <div class="item">
                    <div class="title">120 000 м3</div>
                    <div class="desc">Экспортных пиломатериалов производим ежегодно</div>
                </div>
                <div class="item">
                    <div class="title">10 гектаров</div>
                    <div class="desc">Своих производственных площадей</div>
                </div>
            </div>
            <div class="c_row">
                <div class="col_left">
                    <h2>Руководство</h2>
                </div>
                <div class="col_right">
                    <div class="leaders">
                        <div class="item">
                            <div class="leaders_item">
                                <picture><img src="../img/image.png"/></picture>
                                <div class="title">Эскиндаров Мухадин Абдурахманович</div>
                                <div class="desc">Член Комитета по стратегии и устойчивому развитию</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="leaders_item">
                                <picture><img src="../img/image.png"/></picture>
                                <div class="title">Эскиндаров Мухадин Абдурахманович</div>
                                <div class="desc">Член Комитета по стратегии и устойчивому развитию</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="leaders_item">
                                <picture><img src="../img/image.png"/></picture>
                                <div class="title">Эскиндаров Мухадин Абдурахманович</div>
                                <div class="desc">Член Комитета по стратегии и устойчивому развитию</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="leaders_item">
                                <picture><img src="../img/image.png"/></picture>
                                <div class="title">Эскиндаров Мухадин Абдурахманович</div>
                                <div class="desc">Член Комитета по стратегии и устойчивому развитию</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="c_row">
                <div class="col_left">
                    <h2>15 стран закупают нашу продукцию</h2>
                </div>
                <div class="col_right">
                    <div class="map2"><img src="../img/all_map.png"/></div>
                </div>
            </div>
            <div class="c_row">
                <div class="col_left">
                    <h2>Производство</h2>
                </div>
                <div class="col_right">
                    <p>Наши производственные мощности позволяют ежегодно производить  до 120 тыс. м3 экспортного пиломатериала. Современная линия лесопиления «Арктант», итальянский сушильный комплекс SECAL, вместительностью  до 12 тыс. м3 в месяц, 2 цеха по производству погонажных изделий, линия сортировки сухих пиломатериалов, собственные котельные. Отгрузка готовой продукции производится автотранспортом и 40 футовыми контейнерами.</p>
                </div>
            </div>
            <div class="video_container"><span class="play_btn" id="play_btn"></span>
                <video id="video" src="../img/video.mp4"></video>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('inc/kp');
get_footer();?>
