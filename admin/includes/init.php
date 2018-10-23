<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
//defined('SITE_ROOT') ? null : define('SITE_ROOT',DS.'Users'.DS.'piotr.bialek'.DS.'PhpstormProjects'.DS.'academy'.DS.'project');
//C:\Users\piotr.bialek\PhpstormProjects\academy\project
defined('SITE_ROOT') ? null : define('SITE_ROOT',DS.'usr'.DS.'share'.DS.'nginx'.DS.'html'.DS.'tutorial'.DS.'project');
// /usr/share/nginx/html/tutorial/project
defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT.DS.'admin'.DS.'includes');

require_once("functions.php");
require_once("new_config.php");
require_once("database.php");
require_once("db_object.php");
require_once("user.php");
//require_once("photo.php");
require_once("session.php");
require_once("paginate.php");

