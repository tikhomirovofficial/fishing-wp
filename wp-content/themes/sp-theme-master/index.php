<?php
/*
 * The main template file
 */
wp_redirect('http://wordpress/home.php');

get_header(); 
$sp_obj = new SpClass();?>

    <section style="background-image: url('./assets/img/main_bg.jpg');" class="main__section">
        <div class="main__back_shadow w-100p h-100p">
            <div class="wrapper h-100p">
                <div class="main__content flex-column h-100p jc-center">
                    <h1 class="main__title c-white">
                        Рыбалка с комфортом без нормы вылова в 15 км от Москвы
                    </h1>
                    <a class="main__link c-white" href="https://wa.clck.bar/79269119407">Написать в Whatsapp</a>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="about">
        <div class="wrapper">
            <div class="about__block">
                <h1 class="about__title section__title txt-center">
                    О нас и о рыбалке на наших водоемах
                </h1>
                <div class="about__content flex-row-betw al-center">
                    <div class="about__left flex-column">
                        <img class="about__img" src="assets/img/about_img.jpg" alt="">
                        <iframe class="about__video" width="400" height="234" src="https://www.youtube.com/embed/_mQpbzNl3oQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="about__right flex-column gap-20">
                        <p class="about__text-item">
                            Наше хозяйство, расположено всего в 15 километрах от Москвы, на территории СПК «Ромашка», предоставляет услуги платной рыбалки в Подмосковье. Вас ждет радушный прием гостей, вежливое общение.
                        </p>
                        <p class="about__text-item">
                            У нас можно отдохнуть от московской суеты, насладится природой, спокойствием, чистым воздухом и конечно насладится рыбалкой. Мы для Вас создали два пруда, для удобства рыбалки и выбора - большой и малый, берега которых обустроены мостиками и кабинками для ловли рыбы, крытыми беседками и мангалами.
                        </p>
                        <p class="about__text-item">
                            В наши пруды постоянно запускают здоровую и качественную рыбу, поэтому клёв и удовольствие от рыбалки, мы Вам гарантируем.
                        </p>
                        <p class="about__text-item">
                            В наших прудах водится: форель, осетр, щука, сом, карп, линь, сиг.
                        </p>
                        <p class="about__text-item">
                            Рыба, выловленная в нашем водоеме, обладает исключительным вкусом без лишних запахов.
                        </p>
                        <b class="about__text-item aboute__text-bold">
                            Приезжайте на рыбалку к Иванычу, мы рады видеть Вас в нашем хозяйстве!
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
                    Цены на рыбалку и услуги
                </h1>
                <div class="prices__tabs ">
                    <div class="prices__tabs-list f-center-row gap-20">
                        <div data-tab="1" class="prices__tabs-item prices__tab-active">Рыбалка</div>
                        <div data-tab="2" class="prices__tabs-item">Рыба</div>
                        <div data-tab="3" class="prices__tabs-item">Беседки</div>
                    </div>
                    <div id="tab_1" class="price__tab-content prices__tabs-content-showed">
                        <div class="price__fishing flex-column gap-20">
                            <div class="price__fishing-item flex-column ">
                                <h2>Стоимость путевки на рыбалку - 500 руб.</h2>
                                <ul>
                                    <li>Пойманная рыба оплачивается по прейскуранту - по окончании рыбалки улов взвешивается.</li>
                                    <li>В будние дни: жены и дети до 10 лет присутствуют по путевке рыбака.
                                        В выходные дни: дети до 10 лет присутствуют по путевке рыбака</li>
                                    <li>Количество снастей на путевку - 2 шт.</li>
                                </ul>
                            </div>
                            <div class="price__fishing-item flex-column ">
                                <h2>Правила</h2>
                                <ol>
                                    <li>Прибыв на водоём, оплачивайте путёвку. </li>
                                    <li>По окончании рыбалки взвешиваете улов и оплачиваете согласно прейскуранту.</li>
                                    <li>Пойманную в процессе рыбалки рыбу складывать в отдельный садок.</li>
                                </ol>
                            </div>
                            <div class="price__fishing-item flex-column ">
                                <h2>На территории ЗАПРЕЩАЕТСЯ:</h2>
                                <ul>
                                    <li>Ловля без подсачника.</li>
                                    <li>Вход с собаками.</li>
                                    <li>Размещать свои мангалы.</li>
                                    <li>Выпускать пойманную рыбу - штраф 2000 руб. (в случае такого желания, обратитесь к администратору).</li>
                                    <li>Готовить рыбу к употреблению до взвешивания и оплаты - штраф 3000 руб.</li>
                                    <li>Вход в нетрезвом состоянии.</li>
                                    <li>Занимать беседки с мангальными зонами до оплаты.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="tab_2" class="price__tab-content">
                        <div class="prices__tab-block w-100p flex-wrap gap-20">
                            <div class="prices__fish w-100p flex-column gap-20 flex-wrap">
                                <div class="prices__fish-item flex-row-betw al-center">
                                    <p>Карп</p> <p>350 ₽</p>
                                </div>
                                <div class="prices__fish-item flex-row-betw al-center">
                                    <p>Карп</p> <p>350 ₽</p>
                                </div>
                                <div class="prices__fish-item flex-row-betw al-center">
                                    <p>Форель</p> <p>350 ₽</p>
                                </div>
                                <div class="prices__fish-item flex-row-betw al-center">
                                    <p>Карп</p> <p>350 ₽</p>
                                </div>
                                <div class="prices__fish-item flex-row-betw al-center">
                                    <p>Карп</p> <p>350 ₽</p>
                                </div>
                                <div class="prices__fish-item flex-row-betw al-center">
                                    <p>Карп</p> <p>350 ₽</p>
                                </div>
                                <div class="prices__fish-item flex-row-betw al-center">
                                    <p>Карп</p> <p>350 ₽</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="tab_3" class="price__tab-content">
                        <div class="prices__gazebos w-100p flex-wrap flex-row-betw">
                            <div class="prices__gazebos-item">
                                <h2>Беседка на 15 человек + мангал</h2>
                                <img src="assets/img/besedka_1.jpeg" alt="">
                                <b>Стоимость:</b>
                                <p>5 000 руб.</p>
                            </div>
                            <div class="prices__gazebos-item">
                                <h2>Беседка на 15 человек + мангал</h2>
                                <img src="assets/img/besedka_1.jpeg" alt="">
                                <b>Стоимость:</b>
                                <p>Будни: 2 000 руб. Выходные: 3 000 руб.</p>
                            </div>
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
                        <b>Стоимость:</b> 5 000 рублей/сутки
                    </p>
                    <p class="hotel__worktime">
                        Двухместное размещение в любой день.
                        Заезд в 14:00, выезд в 12:00.
                    </p>
                </div>
                <div class="hotel__photos flex-wrap">
                    <div class="hotel__photos-item">
                        <div style="background-image: url('assets/img/hotel_images/hotel_1.jpg')" class="hotel__img"></div>
                    </div>
                    <div class="hotel__photos-item">
                        <div style="background-image: url('assets/img/hotel_images/hotel_2.jpg')" class="hotel__img"></div>
                    </div>
                    <div class="hotel__photos-item">
                        <div style="background-image: url('assets/img/hotel_images/hotel_3.jpg')" class="hotel__img"></div>
                    </div>
                    <div class="hotel__photos-item">
                        <div style="background-image: url('assets/img/hotel_images/hotel_4.jpg')" class="hotel__img"></div>
                    </div>
                    <div class="hotel__photos-item">
                        <div style="background-image: url('assets/img/hotel_images/hotel_5.jpg')" class="hotel__img"></div>
                    </div>
                    <div class="hotel__photos-item">
                        <div style="background-image: url('assets/img/hotel_images/hotel_6.jpg')" class="hotel__img"></div>
                    </div>
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