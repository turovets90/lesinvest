<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lesinvest
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?<?php echo date('H:i:s');?>"/>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <div class="topbar">
        <div class="container">
            <div class="d_flex">
                <div class="logo">
                    <?php the_custom_logo(); ?>
                  </div>
                <div class="mm_btn">
                    <button class="hamburger"><span></span><span></span><span></span></button>
                </div>
                <div class="h_right">
                    <div class="h_lang">
                        <button class="h_lang_btn">Русский</button>
                        <div class="h_dropdown">
                            <ul>
                                <li><span data-google-lang="ru">Русский</span></li>
                                <li><span data-google-lang="en">English</span></li>
                                <li><span data-google-lang="zh-TW">中国</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="h_contacts">
                        <ul>
                            <li><a href="tel:<?php the_field('telefon', 11); ?>"><?php the_field('telefon', 11); ?></a></li>
                            <li><a href="mailto:<?php the_field('email', 11); ?>"><?php the_field('email',11); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar">
        <div class="container">
            <div class="main_menu">
                <?php wp_nav_menu([
                    'menu'            => 'main_menu',
                    'container'       => '',
                    'menu_class'      => 'nav',
                ]); ?>
                <div class="h_lang">
                    <button class="h_lang_btn">Русский</button>
                    <div class="h_dropdown">
                        <ul>
                            <li><span data-google-lang="ru">Русский</span></li>
                            <li><span data-google-lang="en">English</span></li>
                            <li><span data-google-lang="zh-TW">中国</span></li>
                        </ul>
                    </div>
                </div>
                <div class="h_contacts">
                    <ul>
                        <li><a href="tel:<?php the_field('telefon', 11); ?>"><?php the_field('telefon', 11); ?></a></li>
                        <li><a href="mailto:<?php the_field('email', 11); ?>"><?php the_field('email',11); ?></a></li>
                    </ul>
                </div>
                <?php
                $link = get_field('knopka_svyazatsya_s_nami', 11);
                if( $link ):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    ?>
                    <a class="btn_secondary" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</header>


