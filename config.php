<?php

//$c="http://localhost:8080/fgub/";

// Shortcuts
define('DS', DIRECTORY_SEPARATOR);
define('HOST_NAME', 'http://' . $_SERVER['HTTP_HOST'] . '/');
define('APP_PATH', realpath(dirname(__FILE__)) . DS);
define('TEMPLATE', APP_PATH . 'includes' . DS . 'tmp' . DS);

define('PLUGINS', 'resources' . DS . 'plugins' . DS);

define('BOOTSTRAP', 'resources' . DS . 'bootstrap' . DS . 'css' . DS);
define('DIST_CSS', 'resources' . DS . 'dist' . DS . 'css' . DS);
define('DIST_SKINS', DIST_CSS . DS . 'skins' . DS);
define('PLUGIN_ICHECK', PLUGINS . DS . 'iCheck' . DS);
define('PLUGIN_ICHECK', 'resources' . DS . 'plugins' . DS . 'iCheck' . DS);

define('UPLOADS_PATH', 'uploads/');
define('SLIDER', 'uploads/slider/');
define('CATEGORIES', 'uploads/categories/');
define('SUBCAT', 'uploads/sub_cat/');
define('PAGES', 'uploads/pages/');
define('PRODUCTS', 'uploads/product/');

//require_once '../db_conn.php';

require_once 'includes/db_func.php';
