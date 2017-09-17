<?php

/*
 * Module file: System Check
 */

$MODULE["author"]          = "Ben Keen";
$MODULE["author_email"]    = "ben.keen@gmail.com";
$MODULE["author_link"]     = "http://formtools.org";
$MODULE["version"]         = "2.0.0";
$MODULE["date"]            = "2017-06-04";
$MODULE["origin_language"] = "en_us";

// define the module navigation - the keys are keys defined in the language file. This lets
// the navigation - like everything else - be customized to the users language. The paths are always built
// relative to the module's root, so help/index.php means: /[form tools root]/modules/export_manager/help/index.php
$MODULE["nav"] = array(
  "module_name"                   => array('{$module_dir}/index.php', false),
  "phrase_ft3_compatibility"      => array('{$module_dir}/ft3.php', true),
  "phrase_file_verification"      => array('{$module_dir}/files.php', true),
  "phrase_table_verification"     => array('{$module_dir}/tables.php', true),
  "phrase_hook_verification"      => array('{$module_dir}/hooks.php', true),
  "phrase_orphan_clean_up"        => array('{$module_dir}/orphans.php', true),
  "phrase_environment_info"       => array('{$module_dir}/env.php', false),
  "word_help"                     => array('{$module_dir}/help.php', false)
);
