<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_before.php");
global $APPLICATION;
IncludeModuleLangFile(__FILE__);
$APPLICATION->SetTitle(GetMessage("MODULE_TITLE"));

CModule::IncludeModule('crm');



require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php");

?>
