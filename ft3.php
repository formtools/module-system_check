<?php

require_once("../../global/library.php");
ft_init_module_page();

$page_vars = array(
    "php_version" => phpversion(),
    "php_version_compatible" => version_compare(phpversion(), 5.3, ">="),
    "pdo_available" => extension_loaded("PDO"),
    "pdo_mysql_available" => extension_loaded("pdo_mysql")
);

$page_vars["head_string"] =<<< EOF
<script src="{$g_root_url}/modules/system_check/global/scripts/tests.js"></script>
<link type="text/css" rel="stylesheet" href="{$g_root_url}/modules/system_check/global/css/styles.css">
EOF;

ft_display_module_page("templates/ft3.tpl", $page_vars);
