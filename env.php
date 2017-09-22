<?php

require_once("../../global/library.php");

use FormTools\Core;
use FormTools\General;
use FormTools\Modules;

Core::init();
Core::$user->checkAuth("admin");
Modules::initModulePage();
$L = Modules::getModuleLangFile("system_check", Core::$user->getLang());

$page = Modules::loadModuleField("system_check", "page", "page", "summary");
$root_url = Core::getRootUrl();
$same_page = General::getCleanPhpSelf();

$page_vars = array(
    "page" => $page,
    "tabs" => array(
        "summary" => array(
            "tab_label" => $L["word_summary"],
            "tab_link" => "{$same_page}?page=summary",
            "pages" => array("summary")
        ),
        "phpinfo" => array(
            "tab_label" => "phpinfo",
            "tab_link" => "{$same_page}?page=phpinfo",
            "pages" => array("phpinfo")
        )
    ),
    "css_files" => array("{$root_url}/modules/system_check/global/css/styles.css")
);

switch ($page) {
    case "summary":
        require_once("env_tab_summary.php");
        break;
    case "phpinfo":
        require_once("env_tab_phpinfo.php");
        break;
    default:
        require_once("env_tab_summary.php");
        break;
}
