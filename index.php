<?php

require_once("../../global/library.php");

use FormTools\Core;
use FormTools\Modules;
use FormTools\Themes;

Core::init();
Core::$user->checkAuth("admin");
Modules::initModulePage();

$root_url = Core::getRootUrl();

$page_vars = array();
$page_vars["head_string"] =<<< END
<link type="text/css" rel="stylesheet" href="{$root_url}/modules/system_check/global/css/styles.css?v=2">
END;

Themes::displayModulePage("templates/index.tpl", $page_vars);
