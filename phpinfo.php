<?php

require_once("../../global/library.php");

use FormTools\Core;

Core::init();
Core::$user->checkAuth("admin");

phpinfo();
