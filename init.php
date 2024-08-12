<?php

use Bitrix\Main\Loader;
use Bitrix\Main\EventManager;
use Bitrix\Main\Page\Asset;

\Bitrix\Main\UI\Extension::load('ui.stepprocessing');
Loader::includeModule('crm');


if (file_exists(__DIR__ . "vendor/autoload.php")) {
    require_once __DIR__ . "vendor/autoload.php";
}



Asset::getInstance()->addJs("/local/modules/car.management/js/script.js");
Asset::getInstance()->addJs("/local/components/car.import/templates/.default/script.js");
Asset::getInstance()->addJs("/bitrix/js/main/core/core.js");
Asset::getInstance()->addJs("/bitrix/js/main/core/core_ui_step_processing.js");
Asset::getInstance()->addCss("/bitrix/js/main/core/css/core_ui_step_processing.css");
Asset::getInstance()->addJs("https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js");
Asset::getInstance()->addJs("https://cdn.jsdelivr.net/npm/@bitrix/ui/dist/ui.bundle.min.js");
Asset::getInstance()->addJs("https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js");
Asset::getInstance()->addCss("https://cdn.jsdelivr.net/npm/@bitrix/ui/dist/ui.bundle.min.css");


Loader::registerAutoLoadClasses(null, [
    'CarManagement\\classes\\CarProcess' => '/local/modules/car.management/classes/CarProcess.php',
    'CarManagement\\classes\\ChunkReadFilter' => '/local/modules/car.management/admin/ChunkReadFilter.php',
    'CarManagement\\classes\\ExcelController' => '/local/modules/car.management/admin/ExcelController.php',
    'CarManagement\\classes\\CarFields' => '/local/modules/car.management/classes/CarFields.php',
    'CarManagement\\classes\\CarUtils' => '/local/modules/car.management/classes/CarUtils.php',
    'CarManagement\\classes\\CarValidator' => '/local/modules/car.management/classes/CarValidator.php',
    'CarManagement\\classes\\CarNotification' => '/local/modules/car.management/classes/CarNotification.php',
    'CarManagement\\classes\\CreateFunnels' => '/local/modules/car.management/classes/CreateFunnels.php',
]);

