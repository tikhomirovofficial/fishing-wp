<?php
/*
 *Template Name: gallery
 */

get_header();
$sp_obj = New SpClass();
?>
<div id="gallery-carousel" class="gallery-carousel p-fix w-100v h-100v">
    <div class="gallery-carousel__block h-100p w-100p p-rel">
        <div class="gallery-carousel__header p-abs flex-row-betw">
            <p><span id="slide__now">1</span> / <span id="sliders__length">0</span></p>
            <img id="gallery-close" src="<?=get_template_directory_uri()."/imgs/close.svg"?>" alt="">
        </div>
        <div class="gallery__slider-prev gallery__slider_btn p-abs">
            <img class="slider-prev" src="<?=get_template_directory_uri()."/imgs/arrow-left.svg"?>" alt="">
        </div>
        <div class="gallery__slider-next gallery__slider_btn p-abs">
            <img class="slider-next" src="<?=get_template_directory_uri()."/imgs/arrow-right.svg"?>" alt="">
        </div>
        <div class="swiper h-100p">
            <div class="swiper-wrapper ">
                <?php
                $gallery_items = get_field('gallery_items');

                foreach ($gallery_items as $key=>$value):?>
                    <div class="swiper-slide w-100p h-100p f-center-row">
                        <div class="gallery__slider-item">-->
                            <img src="<?=$value?>" alt="">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>



    </div>
</div>
<section class="gallery">
    <div class="wrapper gallery__block">
        <h1 class="gallery__title section__title txt-center">
            Галерея фотографий
        </h1>
        <div class="gallery__items jc-center flex-wrap">
            <?php
            $gallery_items = get_field('gallery_items');

            foreach ($gallery_items as $key=>$value):?>
                <div class="gallery-item">
                    <div style="background-image: url(<?=$value?>)" class="gallery__img"></div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>