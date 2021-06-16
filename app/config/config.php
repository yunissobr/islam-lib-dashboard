<?php
// DB Params
$debug = false;

if ($debug) {
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'islamLib');

    define('APPROOT', dirname(dirname(__FILE__)));
    define('URLROOT', 'http://127.0.0.1/islamLib/');
    define('SITENAME', 'IslamLib Dashboard');
    define('ROOT', dirname(dirname(dirname(__FILE__))));
} else {

    define('DB_HOST', 'localhost');
    define('DB_USER', 'yuniwirh_islamLibAdmin');
    define('DB_PASS', 'islamLibAdmin');
    define('DB_NAME', 'yuniwirh_islamLib');

    define('APPROOT', dirname(dirname(__FILE__)));
    define('URLROOT', 'https://yuniss.com/islamLibrary/');
    define('SITENAME', 'IslamLib Dashboard');
    define('ROOT', dirname(dirname(dirname(__FILE__))));
}




define('JOMOAA', 0);
define('TAFSSIR', 1);
define('ROQIA', 2);


define('MORNING_AZKAR', 0);
define('AFTERNON_AZKAR', 1);


define('VIDEOS', 0);
define('IMAGES', 1);
define('SOUNDS', 2);



define('LEARN_HOW_TO_PRAY_SECTION', 0);
define('ROQIA_SECTION', 1);


define('ADMIN_EMAIL', 'admin@yuniss.com');
define('ADMIN_PASSWORD', 'admin@yuniss.com');