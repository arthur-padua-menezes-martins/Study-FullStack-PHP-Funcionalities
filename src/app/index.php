<?php

require_once 'main/config/autoloader/AppLoader.class.php';
require_once 'main/config/constant/constant.php';
require_once 'business/core/functions/core-functions.php';
include_once 'main/factory/proxy/validate/content/content-validate-proxy-factory.php';

$app_loader = new AppLoader();
$app_loader->add_directory('lib');
$app_loader->add_directory('data');
$app_loader->add_directory('business');
$app_loader->register();

$form_element = new FormElement(content_validate_proxy_factory());

$form_element->set_title('form_title');
$form_element->set_name('nome');
var_dump($form_element);

?>
