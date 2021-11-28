<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Abben
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body>
<?php wp_body_open(); ?>
<div id="page" class="main-wrapper align-self-center">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'abben' ); ?></a>

	<header id="masthead" class="header">
        <div class="header__wrapper">
            <div class="header__logo">
                <?php
                $logo = get_custom_logo();
                if($logo){
                    echo get_custom_logo();
                } else {
                    echo '<a href="/">' . get_bloginfo() . '</a>';
                }

                ?>
            </div>
            <div class="header__search">
                <?php echo get_search_form() ?>
            </div>
        </div>
        <div class="header__mobile-menu-btn" id="headerMobileMenuToggler">
            <div class="header__mobile-menu__burger-wrapper">
                <div class="burger-top"></div>
                <div class="burger-middle"></div>
                <div class="burger-bottom"></div>
            </div>
        </div>
        <div id="header__menu-wrapper" data-open="false">
            <?php
            wp_nav_menu( array(
                'menu'            => 'main',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
                'container'       => 'nav',               // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
                'container_class' => 'header__menu',
                'container_id'    => 'headerMenu',
            ) );
            ?>
        </div>
	</header><!-- #masthead -->
