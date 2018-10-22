<?php

define(HOME, $_SERVER['DOCUMENT_ROOT'] . '/');
define(ROOT, HOME . '../');
define(CONFIG, ROOT . 'config/');
define(ENGINE, ROOT . 'engine/');
define(MODULES, ROOT . 'modules/');
define(TEMPLATES, ROOT . 'templates/');

require_once 'functions.php';
require_once 'render.php';