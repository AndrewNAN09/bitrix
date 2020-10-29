<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("123");
?><?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"",
	Array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"demo",
	Array(
		"FORGOT_PASSWORD_URL" => "/login/?forgot_password=yes",
		"PROFILE_URL" => "/login/user.php",
		"REGISTER_URL" => "/login/?register=yes",
		"SHOW_ERRORS" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>