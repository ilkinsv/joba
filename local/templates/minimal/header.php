<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Page\Asset;
?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title><?php $APPLICATION->ShowTitle() ?></title>

  <?php
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/template_styles.css');
  Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800&display=swap" rel="stylesheet">');
  $APPLICATION->ShowHead();
  ?>
</head>
<body>
<?php $APPLICATION->ShowPanel(); ?>

  <header>
    <div class="container nav">
      <div class="logo">PC<span style="color:var(--yellow)">Remote</span></div>

      <nav aria-label="Главное меню">
        <?$APPLICATION->IncludeComponent(
            "bitrix:menu",
            "top_menu",
            Array(
                "ALLOW_MULTI_SELECT" => "N",
                "DELAY" => "N",
                "MAX_LEVEL" => "1",
                "MENU_CACHE_GET_VARS" => array(""),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "A",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "top",
                "USE_EXT" => "N"
            )
        );?>
      </nav>

      <button class="cta-primary" onclick="document.getElementById('contact-form')?.scrollIntoView({behavior:'smooth'})">Связаться</button>
      <button class="burger-button" aria-label="Открыть меню" aria-expanded="false">
        <span class="burger-button-line"></span>
        <span class="burger-button-line"></span>
        <span class="burger-button-line"></span>
      </button>
    </div>
  </header>

  <div class="mobile-nav" aria-hidden="true">
    <div class="mobile-nav-content">
      <?$APPLICATION->IncludeComponent(
            "bitrix:menu",
            "top_menu", // We can reuse the same template if the structure is just a UL
            Array(
                "ALLOW_MULTI_SELECT" => "N",
                "DELAY" => "N",
                "MAX_LEVEL" => "1",
                "MENU_CACHE_GET_VARS" => array(""),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "A",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "top",
                "USE_EXT" => "N"
            )
        );?>
    </div>
  </div>

  <main>
