<?php


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


require_once '../db_conn.php';

require_once 'includes/db_func.php';


function seo_url($vp_string){
    $vp_string = trim($vp_string);
    $vp_string = html_entity_decode($vp_string);
    $vp_string = strip_tags($vp_string);
//    $vp_string = strtolower($vp_string);
    $vp_string = preg_replace('~[^ \w\d\W_.]~', ' ', $vp_string);
    $vp_string = preg_replace('~ ~', '-', $vp_string);
    $vp_string = preg_replace('~&~', '_', $vp_string);
    $vp_string = preg_replace('~-+~', '-', $vp_string);
    return $vp_string;
} # seo_url

