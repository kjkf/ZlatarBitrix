<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <nav class="nav">
        <ul class="menu">

            <?
            $bIsMainPage = $APPLICATION->GetCurPage(false) == SITE_DIR || $APPLICATION->GetCurPage(false) == SITE_DIR.'management/' || $APPLICATION->GetCurPage(false) == SITE_DIR.'departments/';
            $previousLevel = 0;
            foreach($arResult as $arItem):?>

            <?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
                <?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
            <?endif?>

            <?if ($arItem["IS_PARENT"]):?>

            <?if ($arItem["DEPTH_LEVEL"] == 1):?>
            <?if ($arItem["LINK"] == '/'):?>
            <li class="menu-item <?if ($arItem["SELECTED"] && $bIsMainPage):?>active<?else:?><?endif?>"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                <ul class="submenu">
                    <?else:?>
                    <li class="menu-item <?if ($arItem["SELECTED"]):?>active<?else:?><?endif?>"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                        <ul class="submenu">
                            <?endif?>

                            <?endif?>

                            <?else:?>

                                <?if ($arItem["PERMISSION"] > "D"):?>

                                    <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                                        <li class="menu-item <?if ($arItem["SELECTED"]):?>active<?else:?><?endif?>"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
                                    <?else:?>
                                        <li class="menu-item <?if ($arItem["SELECTED"]):?>active<?else:?><?endif?>"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
                                    <?endif?>

                                <?else:?>

                                    <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                                        <li><a href="" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
                                    <?else:?>
                                        <li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
                                    <?endif?>

                                <?endif?>

                            <?endif?>

                            <?$previousLevel = $arItem["DEPTH_LEVEL"];?>

                            <?endforeach?>

                            <?if ($previousLevel > 1)://close last item tags?>
                                <?=str_repeat("</ul></li>", ($previousLevel-1) );?>
                            <?endif?>

                        </ul>
    </nav>
    <div class="menu-clear-left"></div>
<?endif?>