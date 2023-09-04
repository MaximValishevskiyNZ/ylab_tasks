<? require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?><?$APPLICATION->IncludeComponent(
	"tasks:access.list",
	"",
	Array(
		"ACTIVE" => "Y"
	)
);?><? require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>