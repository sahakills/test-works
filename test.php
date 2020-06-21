<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?><?$APPLICATION->IncludeComponent(
	"test:main.feedback",
	"custom-feedback",
	Array(
		"AJAX_MODE" => "Y",
		"EMAIL_TO" => "BykovAlexanderE@yandex.ru",
		"EVENT_MESSAGE_ID" => array("7"),
		"OK_TEXT" => "Ваше сообщение успешно отправленно!",
		"REQUIRED_FIELDS" => array("NAME","PHONE"),
		"USE_CAPTCHA" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>