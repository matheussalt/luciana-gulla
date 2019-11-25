<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700&display=swap" rel="stylesheet">

  <link rel="icon" type="image/png" href="<?=site_url()?>/img/favicon.png" />
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php wp_head(); ?>
  <?php include "funcoesSalt.php";  ?>

  <style>
  .webp .banner,
  .webp .banner-internas {
    background-image: url('<?=get_template_directory_URI()?>/img/webp/banner.webp')
  }

  .no-webp .banner,
  .no-webp .banner-internas {
    background-image: url('<?=get_template_directory_URI()?>/img/rsc/banner.jpg')
  }

  @media screen and (min-width: 600px) {

    .webp .banner,
    .webp .banner-internas {
      background-image: url('<?=get_template_directory_URI()?>/img/webp/banner@2x.webp')
    }

    .no-webp .banner,
    .no-webp .banner-internas {
      background-image: url('<?=get_template_directory_URI()?>/img/rsc/banner@2x.jpg')
    }
  }
  </style>
</head>

<body <?php body_class(); ?>>

  <div id="fb-root"></div>
  <script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10&appId=243085426048812";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>

  <header class="header" data-animar>
    <div class="header-container">
      <a href="<?=site_url()?>">
        <img src="<?=get_template_directory_URI()?>/img/rsc/logotipo_horizontal.svg" alt="Logotipo Luciana Gulla" />
      </a>

      <div class="header-wrapper">
        <nav class="menu">
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
        </nav>

        <button type="button" class="open-search">
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#search"></use>
          </svg>
        </button>

        <ul class="header-social">
          <li>
            <a href="https://instagram.com/dralucianagulla/" target="_blank">
              <svg width="32" height="32" viewBox="0 0 32 32">
                <use xlink:href="#instagram"></use>
              </svg>
            </a>
          </li>

          <li>
            <a href="https://facebook.com/dralucianagulla/" target="_blank">
              <svg width="32" height="32" viewBox="0 0 32 32">
                <use xlink:href="#facebook"></use>
              </svg>
            </a>
          </li>

          <li>
            <a href="https://wa.me/+5516992411620" target="_blank">
              <svg width="32" height="32" viewBox="0 0 32 32">
                <use xlink:href="#whatsapp"></use>
              </svg>
            </a>
          </li>
        </ul>
      </div>

      <button class="menu-hamb">
        <span></span>
      </button>
    </div>
  </header>

  <? if (!is_front_page()) { ?>
  <section class="banner-internas">
    <svg width="48.357" height="56.5" viewBox="0 0 48.357 56.5">
      <use xlink:href="#marca"></use>
    </svg>

    <div class="container">
      <h1><?=the_title()?></h1>
    </div>

    <svg width="48.357" height="56.5" viewBox="0 0 48.357 56.5">
      <use xlink:href="#marca"></use>
    </svg>
  </section>
  <? } ?>