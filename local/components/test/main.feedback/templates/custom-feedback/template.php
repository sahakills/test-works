<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
$this->addExternalJS("/local/components/test/main.feedback/templates/custom-feedback/js/jquery-3.5.1.min.js");
$this->addExternalJS("/local/components/test/main.feedback/templates/custom-feedback/js/maskForm/jquery.maskedinput.min.js");
$this->addExternalJS("/local/components/test/main.feedback/templates/custom-feedback/js/main.js");
$this->addExternalCss('/local/components/test/main.feedback/templates/custom-feedback/index.css')
?>
<div class="mfeedback">


<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
<?=bitrix_sessid_post()?>
    <div class="body-form">
        <div id="custom-form" class="form-wrap">
            <?
            if(strlen($arResult["OK_MESSAGE"]) > 0)
                {
                ?>
            <div class="send send-ok">
                <p><?=$arResult["OK_MESSAGE"];?></p>
            </div>
                <?
            } else {
                ?>
                <div class="form-wrap-input">
                    <input type="text" name="user_name" placeholder="Ваше имя" value="<?=$arResult["AUTHOR_NAME"]?>">

                    <input name="user_tel" type="tel" placeholder="+7 (___) ___-__-__" class="phone-form" value="<?=$arResult["AUTHOR_PHONE"]?>">

                </div>
                <div class="form-wrap-checkbox">
                    <label for="check" class="container">Я согласен с пользовательским соглашением
                        <input id="check" name="check" value="1" type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="form-wrap-submit">
                    <input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
                </div>
                <?
                }
            ?>
            <?
            if(!empty($arResult["ERROR_MESSAGE"])) {
                ?>
            <div class="send send-error">
                    <?
                    foreach($arResult["ERROR_MESSAGE"] as $v)
                    ShowError($v);
                    ?>

            </div>
                <?
            }
            ?>
        </div>
    </div>
	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
</form>
</div>
<?
if(strlen($arResult["OK_MESSAGE"]) > 0)
{

    print_r(strlen($_POST));
}
?>