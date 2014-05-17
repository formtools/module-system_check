<?php

/*
 * Module file: System Check
 */

$MODULE["author"]          = "Encore Web Studios";
$MODULE["author_email"]    = "formtools@encorewebstudios.com";
$MODULE["author_link"]     = "http://www.encorewebstudios.com";
$MODULE["version"]         = "1.0.1";
$MODULE["date"]            = "2011-12-05";
$MODULE["origin_language"] = "en_us";

// define the module navigation - the keys are keys defined in the language file. This lets
// the navigation - like everything else - be customized to the users language. The paths are always built
// relative to the module's root, so help/index.php means: /[form tools root]/modules/export_manager/help/index.php
$MODULE["nav"] = array(
  "module_name"                   => array('{$module_dir}/index.php', false),
  "phrase_file_verification"      => array('{$module_dir}/files.php', true),
  "phrase_table_verification"     => array('{$module_dir}/tables.php', true),
  "phrase_hook_verification"      => array('{$module_dir}/hooks.php', true),
  "phrase_orphan_clean_up"        => array('{$module_dir}/orphans.php', true),
  "word_help"                     => array('{$module_dir}/help.php', false)
);