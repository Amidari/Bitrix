<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Объявления");
?><?$APPLICATION->IncludeComponent("bitrix:landing.landing_designblock", "", array(
	"BLOCK_ID" => "",
		"LANDING_ID" => "",
		"SITE_ID" => "",
		"TYPE" => "PAGE"
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>