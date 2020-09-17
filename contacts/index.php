<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
    <!--<div class="content__center">-->
        <div class="content-wrap">
            <div class="contacts__t">
                <div class="map-wrap" id="map"></div>
                <div class="address">
                    <h2 class="title">ТОО “Златарь”</h2>
                    <ul class="address-list">
                        <li class="address-list__item ic location">
                            <span class="bold-text">Адрес:</span>
                            <span class="ml-sm-0">Казахстан, г. Алматы, ул. Златоустовская, 29 <br> (Толе би - Отеген Батыра);</span>
                        </li>
                        <li class="address-list__item ic web">
                            <span class="bold-text">Web:</span>
                            <span>zlatar.kz</span>
                        </li>
                        <li class="address-list__item ic email">
                            <span class="bold-text">E-mail:</span>
                            <span>zlatar12@mail.ru</span>
                        </li>
                        <li class="address-list__item ic phone">
                            <span class="bold-text">Номера телефонов:</span>
                            <span class="phone-wrap">
                                            <a class="phone" href="te+77076060319">+7 (707) 60 60 319</a>
                                            <a class="phone" href="tel:+77273297848">+7 (727) 32 97 848</a>
                                        </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="contacts__b ">
                <div class="contacts-img">
                    <img src="<?=SITE_TEMPLATE_PATH?>/public/images/content/contact_img.jpg" alt="Адрес ТОО “Златарь”">
                </div>
            </div>
        </div>
    <!--</div>
    <div class="content__footer">
        <a href="#" class="link link--footer">Оставить заявку</a>
    </div>-->
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>