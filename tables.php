<?php

require_once("../../global/library.php");

use FormTools\Core;
use FormTools\Modules;
use FormTools\Themes;
use FormTools\Modules\SystemCheck\General;
use FormTools\Modules\SystemCheck\Generation;

Core::init();
Core::$user->checkAuth("admin");
Modules::initModulePage();
$L = Modules::getModuleLangFile("system_check", Core::$user->getLang());

$root_url = Core::getRootUrl();

// $tables: array of table names without prefix
//echo Generation::generateDbConfigFile(Core::getCoreTables()); // Core
//echo sc_generate_db_config_file($tables, "module"); // Module
////exit;

$word_testing_uc = mb_strtoupper($L["word_untested"]);
$word_passed_uc  = mb_strtoupper($L["word_passed"]);
$word_failed_uc  = mb_strtoupper($L["word_failed"]);

$page_vars = array();
$page_vars["module_list"] = General::getCompatibleModules("tables");
$page_vars["core_version"] = Core::getVersionString();
$page_vars["css_files"] = array("{$root_url}/modules/system_check/global/css/styles.css");
$page_vars["head_string"] =<<< EOF
<script src="{$root_url}/modules/system_check/global/scripts/tests.js"></script>
<script>
g.messages = [];
g.messages["word_testing_c"] = "{$L["word_testing_c"]}";
g.messages["word_untested"] = "$word_testing_uc";
g.messages["word_passed"] = "$word_passed_uc";
g.messages["word_failed"] = "$word_failed_uc";
g.messages["phrase_missing_table_c"] = "{$L["phrase_missing_table_c"]}";
g.messages["phrase_missing_column_c"] = "{$L["phrase_missing_column_c"]}";
g.messages["phrase_table_looks_good_c"] = "{$L["phrase_table_looks_good_c"]}";
g.messages["phrase_invalid_column_c"] = "{$L["phrase_invalid_column_c"]}";
g.messages["text_tables_test"] = "{$L["text_tables_test"]}";
g.messages["notify_test_complete_problems"] = "{$L["notify_test_complete_problems"]}";
g.messages["notify_test_complete_no_problems"] = "{$L["notify_test_complete_no_problems"]}";
g.messages["validation_no_components_selected"] = "{$L["validation_no_components_selected"]}";

var loading = new Image();
loading.src = "$root_url/modules/system_check/images/loading.gif";
</script>
EOF;

Themes::displayModulePage("templates/tables.tpl", $page_vars);
