<?php
/**
 * Created by IntelliJ IDEA.
 * User: yakjk
 * Date: 10.09.2020
 * Time: 16:16
 */
?>
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>

    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>

    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/public/css/normalize.css')?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/public/css/styles.min.css')?>
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<?
$curpage = $APPLICATION->GetCurPage(false); //url текущей страницы
$bIsMainPage = $curpage == SITE_DIR; // флаг, определяющий является ли страница главной
$isDetailPage = isDetailPage($curpage);
$menuType = getMenuTypeClass($curpage); //возвращает класс для меню и для блока .left-side
$sContentClass = getContentClass($curpage, $isDetailPage); // возвращает класс для контентного блока для каждой страницы //'content-'.$page;
$breadCreadcrumbs = $APPLICATION->GetPageProperty("isBreadcrumbs");
$isBreadCreadcrumbs = isBreadCreadcrumbs($breadCreadcrumbs, $isDetailPage);

//echo $breadCreadcrumbs.'***';
//echo $isBreadCreadcrumbs;
if ($isBreadCreadcrumbs) {

}

if($curpage == SITE_DIR.'test.php/'){
    $menuType = 'm-collapsed';
    $sContentClass = 'content-services';
}

?>
<div class="container_wrap">
    <div class="container">
        <header class="header">
            <div class="contacts header__contacts">
                <div class="contacts__l">
                    <a class="ic email" href="#">
                        <?$APPLICATION->IncludeFile(
                            SITE_DIR.'include/email.php',
                            array(),
                            array(
                                "MODE" => "text"
                            )
                        );?>
                    </a>
                </div>
                <div class="contacts__r">
                    <a class="ic phone" href="tel:+77076060319">
                        <?$APPLICATION->IncludeFile(
                            SITE_DIR.'include/phone1.php',
                                array(),
                                array(
                                        "MODE" => "text"
                                )
                        );?>
                    </a>
                    <a class="ic phone" href="tel:+77273297848">
                        <?$APPLICATION->IncludeFile(
                            SITE_DIR.'include/phone2.php',
                            array(),
                            array(
                                "MODE" => "text"
                            )
                        );?>
                    </a>
                </div>
            </div>
            <div class="left-side <?=$menuType?>">
                <div class="header__burger">
                    <span></span>
                </div>
                <div class="logo">
                    <?if($bIsMainPage):?>
                        <span class="logo__link"><img src="<?=SITE_TEMPLATE_PATH?>/public/images/content/ZR_Logo.svg" alt="ЗЛАТАРЬ" class="logo__img"></span>
                    <?else:?>
                        <a href="/" class="logo__link"><img src="<?=SITE_TEMPLATE_PATH?>/public/images/content/ZR_Logo.svg" alt="ЗЛАТАРЬ" class="logo__img"></a>
                    <?endif;?>
                </div>
                <div class="nav-wrap">
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "horizontal_multilevel2", Array(
                        "ALLOW_MULTI_SELECT" => "Y",	// Разрешить несколько активных пунктов одновременно
                        "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                        "DELAY" => "N",	// Откладывать выполнение шаблона меню
                        "MAX_LEVEL" => "2",	// Уровень вложенности меню
                        "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                        "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                        "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                        "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                        "ROOT_MENU_TYPE" => "leftfirst",	// Тип меню для первого уровня
                        "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                        "COMPONENT_TEMPLATE" => "horizontal_multilevel"
                    ),
                        false
                    );?>
                    <div class="banner">
                        <img src="<?=SITE_TEMPLATE_PATH?>/public/images/content/banner_01.jpg" alt="ЗЛАТАРЬ" class="banner__img">
                    </div>
                </div>
            </div>
        </header>
        <div class="content <?=$sContentClass?>  <?=$menuType?>"> <!--m-collapsed или m-sm -->
            <div class="content-in">
                <h2 class="content__header title title-main"><span class="ic-rhomb"></span><?php $APPLICATION->ShowTitle() ?></h2>
                <div class="content__center">
                <?if ($isBreadCreadcrumbs):?>
                    <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumb", Array(
                        "PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
                        "SITE_ID" => "-",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
                        "START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
                        "ADD_SECTIONS_CHAIN" => "N"
                    ),
                        false
                    );?>
                <?endif?>