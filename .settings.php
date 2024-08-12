<?php
use Bitrix\Main\Loader;

Loader::registerAutoLoadClasses('car.management', array(
    'ImportController' => '/local/modules/car.management/controllers/ImportController.php',
));