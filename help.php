<?php

require_once("../../global/library.php");

use FormTools\Modules;
use FormTools\Themes;

$module = Modules::initModule("admin");
$L = $module->getLangStrings();

Themes::displayModulePage("templates/help.tpl", array());
