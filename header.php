<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package IdeeCasa
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="date=no">
    <meta name="format-detection" content="address=no">
    <meta name="format-detection" content="email=no">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="page">
        <header class="header js-header <?php
        if ( is_product() ) {
            echo 'invert';
        }
    ?>">
            <div class="header__body layout">
                <a href="/" class="header__logo">
                    <img class="header__logo-svg" src="<?php echo ic_image_directory()?>logo-white.svg" alt="">
                </a>
                <div class="header__menu">
                    <div class="header__mobile js-header-mobile">
                        <nav class="header__nav">
                            <ul class="header__list">
                                <li class="header__list-item">
                                    <a class="header__list-item-button text-white" href="/">Главная</a>
                                </li>
                                <li class="header__list-item">
                                    <button type="button"
                                        class="header__list-item-button text-white js-header-menu-toggle">Каталог</button>
                                </li>
                                <li class="header__list-item">
                                    <a class="header__list-item-button text-white" href="/about">О нас</a>
                                </li>
                                <li class="header__list-item">
                                    <a class="header__list-item-button text-white" href="/where-buy/">Где купить</a>
                                </li>
                                <li class="header__list-item">
                                    <a class="header__list-item-button text-white" href="/contacts/">Контакты</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="header__info">
                    <div class="header__info-call">
                        <a href="tel:+74951544142">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_533_961)">
                                    <path
                                        d="M7.48585 18.5715C6.6061 19.139 5.55775 19.3863 4.51709 19.2719C3.47642 19.1574 2.50691 18.6881 1.77156 17.9429L1.1287 17.3143C0.846869 17.026 0.689066 16.6389 0.689066 16.2357C0.689066 15.8326 0.846869 15.4454 1.1287 15.1572L3.85728 12.4572C4.14314 12.1762 4.5279 12.0188 4.9287 12.0188C5.32951 12.0188 5.71427 12.1762 6.00013 12.4572C6.28841 12.739 6.67555 12.8968 7.0787 12.8968C7.48186 12.8968 7.869 12.739 8.15728 12.4572L12.443 8.17145C12.586 8.03056 12.6995 7.86265 12.777 7.67749C12.8545 7.49233 12.8944 7.29361 12.8944 7.09288C12.8944 6.89216 12.8545 6.69344 12.777 6.50827C12.6995 6.32311 12.586 6.1552 12.443 6.01431C12.1621 5.72845 12.0046 5.34368 12.0046 4.94288C12.0046 4.54208 12.1621 4.15732 12.443 3.87145L15.1573 1.15717C15.4456 0.875332 15.8327 0.717529 16.2358 0.717529C16.639 0.717529 17.0261 0.875332 17.3144 1.15717L17.943 1.80002C18.6882 2.53537 19.1575 3.50489 19.272 4.54555C19.3865 5.58621 19.1391 6.63456 18.5716 7.51431C15.6144 11.8725 11.8517 15.6255 7.48585 18.5715Z"
                                        stroke="white" stroke-width="1.42857" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_533_961">
                                        <rect width="20" height="20" fill="white" transform="matrix(-1 0 0 1 20 0)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span class="title-4-white">
                                +7 (495) 154 41 42
                            </span>
                        </a>
                    </div>
                    <a class="header__info-pic" href="#">
                        <svg class="header__info-pic-svg" width="20" height="18" viewBox="0 0 20 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.5427 6.57134H2.45701C2.24275 6.567 2.03026 6.61092 1.83527 6.69985C1.64029 6.78878 1.46782 6.92043 1.33062 7.08507C1.19343 7.2497 1.09503 7.44309 1.04272 7.65091C0.990414 7.85873 0.98553 8.07566 1.02843 8.28562L2.59986 16.1428C2.66665 16.4703 2.84618 16.764 3.10721 16.9729C3.36824 17.1817 3.69423 17.2924 4.02843 17.2856H15.9713C16.3055 17.2924 16.6315 17.1817 16.8925 16.9729C17.1535 16.764 17.3331 16.4703 17.3999 16.1428L18.9713 8.28562C19.0142 8.07566 19.0093 7.85873 18.957 7.65091C18.9047 7.44309 18.8063 7.2497 18.6691 7.08507C18.5319 6.92043 18.3594 6.78878 18.1645 6.69985C17.9695 6.61092 17.757 6.567 17.5427 6.57134Z"
                                stroke="white" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12.8572 1.57153L15.7143 6.57153" stroke="white" stroke-width="1.2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M4.28564 6.57153L7.14279 1.57153" stroke="white" stroke-width="1.2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg></a>
                </div>
            </div>
            <div class="header__bottom">
                <div class="header__bottom-content layout">
                    <div class="header__bottom-menu">
                        <ul class="header__bottom-menu-list">
                            <?php echo ic_menu_top_level();?>
                        </ul>
                    </div>
                    <div class="header__bottom-wrapper">
                       <?php echo ic_menu_second_level();?>
                       <div class="header__bottom-info">
                            <a href="tel:+7 (495) 172 15 24" class="header__bottom-info-link title-4">+7 (495) 172 15
                                24</a>
                            <a href="mailto:info@ideecasa.ru"
                                class="header__bottom-info-link title-4">info@ideecasa.ru</a>
                            <p class="header__bottom-info-text">Пн - Вс 10:00 - 21:00</p>
                            <p class="header__bottom-info-text">г. Москва , Щипковский переулок, 4</p>
                            <p class="header__bottom-info-text">ТЦ Mobel Expo, Нахимовский проспект 24</p>
                        </div>
                    </div>
                    <button class="header__bottom-cards-btn js-header-bottom-btn">
                        <div class="header__bottom-cards-btn-pic">
                            <img class="header__bottom-cards-btn-pic-svg" src="<?php echo ic_image_directory()?>header-x.svg" alt="">
                        </div>
                    </button>
                </div>
            </div>
        </header>
        <div class="bar">
            <ul class="bar__list">
                <li class="bar__list-item">
                    <a href="/" class="bar__list-item-link">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.714355 10.0001L10.0001 0.714355L19.2858 10.0001" stroke="#070605"
                                stroke-width="1.42857" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M3.57153 12.1428V19.2857H16.4287V12.1428" stroke="#070605" stroke-width="1.42857"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                </li>
                <li class="bar__list-item">
                    <button type="button" class="bar__list-item-btn bar__list-item-btn--menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </li>
                <li class="bar__list-item">
                    <a href="/where-buy/" class="bar__list-item-link">
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.4284 7.14268C14.4284 10.6998 7.99986 19.2855 7.99986 19.2855C7.99986 19.2855 1.57129 10.6998 1.57129 7.14268C1.57129 5.43772 2.24858 3.80259 3.45417 2.597C4.65976 1.39141 6.2949 0.714111 7.99986 0.714111C9.70482 0.714111 11.34 1.39141 12.5455 2.597C13.7511 3.80259 14.4284 5.43772 14.4284 7.14268Z"
                                stroke="#070605" stroke-width="1.42857" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path
                                d="M7.99979 9.28571C9.18326 9.28571 10.1426 8.32632 10.1426 7.14286C10.1426 5.95939 9.18326 5 7.99979 5C6.81632 5 5.85693 5.95939 5.85693 7.14286C5.85693 8.32632 6.81632 9.28571 7.99979 9.28571Z"
                                stroke="#070605" stroke-width="1.42857" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="bar__list-item">
                    <a href="/" class="bar__list-item-link">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.0001 0.714357C8.32041 0.71488 6.67235 1.17098 5.23142 2.03409C3.79048 2.8972 2.61064 4.13498 1.81755 5.61561C1.02446 7.09623 0.647828 8.76425 0.727769 10.442C0.807709 12.1198 1.34123 13.7444 2.2715 15.1429L0.714355 19.2858L5.92864 18.3429C7.18422 18.9565 8.5621 19.2787 9.95957 19.2857C11.357 19.2926 12.738 18.984 13.9996 18.3829C15.2612 17.7818 16.3709 16.9037 17.2459 15.814C18.1209 14.7244 18.7386 13.4513 19.0531 12.0897C19.3676 10.728 19.3707 9.31296 19.0621 7.94997C18.7536 6.58697 18.1414 5.31119 17.2712 4.21774C16.4009 3.12428 15.2951 2.24134 14.0362 1.63474C12.7772 1.02814 11.3976 0.713532 10.0001 0.714357Z"
                                stroke="#070605" stroke-width="1.42857" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
        <main class="main">
