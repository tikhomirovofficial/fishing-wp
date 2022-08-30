<?php
/**
 * The header for our theme
 */

function convertMaskPhone($phone) {
    $code = $phone[0];
    $operator = "(".substr($phone, 1, 3).')';
    $region = substr($phone, 4, 3);
    return $code.' '.$operator.' '.$region.'-'.substr($phone, 7, 2).'-'.substr($phone, 9, 2);
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
    <title><?php the_field('title');?></title>
</head>

<body <?php body_class(); ?>>


<!--begin header-->
	<header>
		<div class="wrapper">
			<div class="header__block flex-row-betw al-center">
				<div class="header__present d-f al-center">
					<img class="header__logo" src="<?php the_field('logo'); ?>" alt="">
					<p class="header__text"><?php the_field('logo_text'); ?></p>
				</div>
				<nav>
					<ul class="header__nav d-f">
                        <?php
                            $index = 0;
                            $navigation = get_field('navigation');

                            foreach ($navigation as $key=>$value):?>
                                <li><a class="fade-scroll header__link" href="<?=$value;?>"><?=get_field_object('navigation')['sub_fields'][$index]['label']?></a></li>
                                <?php $index++ ?>
                        <?php endforeach; ?>
					</ul>
				</nav>
				<div class="header__callback">
					<a class="header__phone" href="tel:<?php the_field('phone');?>">+<?php echo convertMaskPhone(get_field('phone'));?></a>
					<p><?php the_field('worktime');?></p>

				</div>
                <div class="header__burger p-rel">
                    <div id="burger" class="header__burger-block flex-column">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
			</div>
		</div>
	</header>
<div id="burger__menu" class="burger__menu bg-white h-100p w-100p p-fix">
    <div class="wrapper burger_wrapper">
        <div class="burger__menu-block flex-column js-between h-100p">
            <div class="burger__nav flex-column gap-30">
                <?php
                $index = 0;
                $navigation = get_field('navigation');

                foreach ($navigation as $key=>$value):?>
                   <a class="fade-scroll burger__nav-link" href="<?=$value;?>"><?=get_field_object('navigation')['sub_fields'][$index]['label']?></a></li>
                    <?php $index++ ?>
                <?php endforeach; ?>
            </div>
            <div class="flex-column gap-20">
                <p class="burger__text"><?php the_field('logo_text'); ?></p>
                <div class="burger__callback">
                    <a class="burger__phone fw-7" href="tel:<?php the_field('phone');?>">+<?php echo convertMaskPhone(get_field('phone'));?></a>
                    <p><?php the_field('worktime');?></p>
                </div>
            </div>


        </div>

    </div>
</div>

