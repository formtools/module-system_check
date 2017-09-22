<?php

require_once("../../global/library.php");

use FormTools\Core;
use FormTools\Modules;
use FormTools\Themes;

Core::init();
Core::$user->checkAuth("admin");
Modules::initModulePage();

$root_url = Core::getRootUrl();

$page_vars = array(
    "css_files" => array("{$root_url}/modules/system_check/global/css/styles.css")
);

Themes::displayModulePage("templates/index.tpl", $page_vars);
