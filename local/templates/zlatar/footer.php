<?php
/**
 * Created by IntelliJ IDEA.
 * User: yakjk
 * Date: 10.09.2020
 * Time: 16:16
 */
?>
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
        </div>
        <div class="content__footer">
            <?if ($bIsMainPage):?>
            <a href="#" class="link">Ключевые подразделения</a>
            <?endif;?>
        </div>
                </div>
            </div>
            <footer class="footer">
                <div class="contacts footer__contacts">
                    <?$APPLICATION->IncludeFile(
                        SITE_DIR.'include/address.php',
                        array(),
                        array(
                            "MODE" => "text"
                        )
                    );?>
                </div>
                <a href="#" class="footer__arrow-down">
                    <img src="<?=SITE_TEMPLATE_PATH?>/public/images/icons/arrow-down.svg" alt="">
                </a>
            </footer>

            <!-- модальное окно -->
            <div class="modal modal-order">
                <div class="modal__in">
                    <form action="">
                        <h2 class="title modal-title">Заявка на звонок</h2>
                        <div class="modal-msg">
                            <span>Все поля должны быть заполнены!</span>
                        </div>
                        <div class="modal-content">
                            <div class="field-group">
                                <label class="field-label">Ваше имя:</label>
                                <input type="text" class="field">
                            </div>
                            <div class="field-group">
                                <label class="field-label">Ваш e-mail:</label>
                                <input type="email" class="field">
                            </div>
                            <div class="field-group">
                                <label class="field-label">Номер Вашего телефона:</label>
                                <input type="text" class="field">
                            </div>
                            <div class="field-group">
                                <label class="field-label">Сообщение:</label>
                                <textarea class="field" cols="5" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn hide-modal">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?/*$APPLICATION->AddChainItem($APPLICATION->GetTitle());*/?>

<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/public/scripts.js')?>
</body>
</html>
