<?php
/*
 * Template Name: home
 */
function arrayToEveryEight($arr) {
    $result = [];
}
get_header(); 
$sp_obj = new SpClass();?>

    <section style="background-image: url(<?php the_field('main_background');?>);" class="main__section">
        <div class="main__back_shadow w-100p h-100p">
            <div class="wrapper h-100p">
                <div class="main__content flex-column h-100p jc-center">
                    <h1 class="main__title c-white">
                        <?php the_field('main_title')?>
                    </h1>
                    <a class="main__link c-white" href="<?php the_field('whatsapp_link')?>">Написать в Whatsapp</a>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="about">
        <div class="wrapper">
            <div class="about__block">
                <h1 class="about__title section__title txt-center">
                    <?php the_field('about_title')?>
                </h1>
                <div class="about__content flex-row-betw al-center">
                    <div class="about__left flex-column">
                        <img class="about__img" src="<?php the_field('about_img') ?>;" alt="">
                        <iframe class="about__video" width="400" height="234" src="https://www.youtube.com/embed/_mQpbzNl3oQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="about__right flex-column gap-20">
                        <?php
                        $index = 0;
                        $about_texts = get_field('about_texts');

                        foreach ($about_texts as $key=>$value):?>
                        <p class="about__text-item"><?=$value?></p>
                            <?php $index++ ?>
                        <?php endforeach; ?>
                        <b class="about__text-item about__text-bold">
                            <?php the_field('about_bold') ?>
                        </b>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="prices" class="prices">
        <div class="wrapper">
            <div class="prices__block">
                <h1 class="prices__title section__title txt-center">
                    <?php the_field('prices_title')?>
                </h1>
                <div class="prices__tabs ">
                    <div class="prices__tabs-list f-center-row gap-20">
                        <div data-tab="1" class="prices__tabs-item prices__tab-active">Рыбалка</div>
                        <div data-tab="2" class="prices__tabs-item">Рыба</div>
                        <div data-tab="3" class="prices__tabs-item">Беседки</div>
                    </div>
                    <div id="tab_1" class="price__tab-content prices__tabs-content-showed">
                        <div class="price__fishing flex-column gap-20">
                            <?php
                            $fishing = get_field('parts_1');
                            $index = 0;
                            foreach ($fishing as $key=>$values):?>
                                <?php
                                $label = get_field_object('parts_1')['sub_fields'][$index]['label'];
                                ?>

                                <div class="price__fishing-item flex-column ">
                                    <h2><?=$label?></h2>
                                    <ul>
                                        <?php
                                        $index_li = 0;

                                        foreach ($values as $key=>$value):?>
                                            <li><?=$value?></li>
                                            <?php $index_li++ ?>
                                        <?php endforeach; ?>
                                    </ul>
                                 </div>
                                <?php $index++ ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div id="tab_2" class="price__tab-content">
                        <div class="prices__tab-block w-100p flex-wrap">
                            <?php
                            $index = 0;
                            $prices_fish = get_field('fish_prices');
                            $prices_chunked = array_chunk($prices_fish, 8);
                            foreach ($prices_chunked as $key=>$value):?>
                                <?php
                                $index_item = 0; ?>
                                 <div class="prices__fish w-100p flex-column gap-20 flex-wrap">
                                     <?php
                                     foreach ($value as $k=>$item):?>
                                         <?php $label = get_field_object('fish_prices')['sub_fields'][$index_item]['label'];
                                         ?>
                                         <div class="prices__fish-item flex-row-betw al-center">
                                             <p><?=$label?></p> <p><?=$item?>₽</p>
                                         </div>
                                         <?php $index_item++ ?>
                                     <?php endforeach; ?>
                                </div>

                                <?php $index++ ?>
                            <?php endforeach; ?>
                        </div>

                    </div>
                    <div id="tab_3" class="price__tab-content">
                        <div class="prices__gazebos w-100p flex-wrap flex-row-betw">
                            <?php
                            $gazebos = get_field('gazebos_prices');

                            foreach ($gazebos as $key=>$value):?>
                                <div class="prices__gazebos-item">
                                    <h2><?=$value['gazebo_title']?></h2>
                                    <img src="<?=$value['gazebo_img']?>" alt="">
                                    <b>Стоимость:</b>
                                    <p><?=$value['gazebo_price']?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="hotel" class="hotel">
        <div class="wrapper">
            <div class="hotel__block">
                <h1 class="hotel__title section__title txt-center">
                    Гостиница для комфортного отдыха
                </h1>
                <div class="hotel__description flex-column gap-30">
                    <p class="hotel__price">
                        <b>Стоимость:</b> <?php the_field('hotel_price')?>
                    </p>
                    <p class="hotel__worktime">
                        <?php the_field('hotel_worktime')?>
                    </p>
                </div>
                <div class="hotel__photos flex-wrap">
                    <?php
                    $hotel_images = get_field('hotel_images');

                    foreach ($hotel_images as $key=>$value):?>
                        <div class="prices__gazebos-item">
                            <div class="hotel__photos-item">
                                <div style="background-image: url(<?=$value?>)" class="hotel__img"></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <section id="contacts" class="contacts">
        <div class="wrapper">
            <div class="contacts__block">
                <div class="flex-column contacts__titles gap-10">
                    <h1 class="contacts__title section__title txt-center">Наши контакты и как доехать</h1>
                    <p class="contacts__description txt-center">
                        Ищите превосходную рыбалку в Московской области, тогда Вам к нам!
                    </p>
                </div>
                <div class="contacts__content js-between d-f">
                    <div class="contacts__info flex-column">
                        <div class="contacts__list flex-column gap-20">
                            <div class="contacts__list-item flex-column gap-5">
                                <h3>Режим работы:</h3>
                                <p>ежедневно с 7:00 до 20:00 (без выходных)</p>
                            </div>
                            <div class="contacts__list-item flex-column gap-5">
                                <h3>Адрес: </h3>
                                <p>Московская область, Щелковский район, деревня Большие Жеребцы, СПК «Ромашка».</p>
                            </div>
                            <div class="contacts__list-item flex-column gap-5">
                                <h3>Телефон</h3>
                                <a class="contacts__link" href="tel:+79269119407">+7 (926) 911-94-07</a>
                            </div>
                            <div class="contacts__list-item flex-column gap-5">
                                <h3>Email</h3>
                                <a class="contacts__link" href="mailto:evg9269119407@yandex.ru">evg9269119407@yandex.ru</a>
                            </div>
                        </div>
                        <div class="contacts__social d-f gap-30">
                            <a href="https://wa.clck.bar/79269119407" class="contacts__social-item d-f al-center">
                                <img class="social__icon" src="assets/img/icons/whatsapp.svg" alt="">
                                WhatsApp
                            </a>
                            <a href="viber://contact?number=79269119407/" class="contacts__social-item d-f al-center">
                                <img class="social__icon" src="assets/img/icons/viber_2.svg" alt="">
                                Viber
                            </a>
                        </div>
                        <div class="contacts__text">
                            Мы заинтересованы в покупке живой рыбы, поиске надежных и регулярных поставщиков.
                            Условия и цены подлежат обсуждению.
                        </div>
                    </div>
                    <div class="contacts__geo">
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A5285408e1625a59fe5c65dc2a56d598d66d90723fcace63c9a1c9c9860d11c6f&amp;source=constructor" width="550" height="550" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php

get_footer();