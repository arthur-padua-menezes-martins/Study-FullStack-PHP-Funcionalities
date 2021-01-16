<?php

require_once 'main/config/autoloader/AppLoader.class.php';
require_once 'main/config/constant/constant.php';

$app_loader = new AppLoader();
$app_loader->add_directory('lib');
$app_loader->add_directory('data');
$app_loader->add_directory('business');
$app_loader->register();

$form = new FormElement('form_contato');

var_dump($form);

?>
