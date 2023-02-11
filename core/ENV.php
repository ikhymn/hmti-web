<?php

define('BASE_PATH','X:/www/hmti-web');
if($_SERVER['SERVER_ADDR'] == "::1") {
  define('BASE_URL', 'http://'.$_SERVER['SERVER_NAME'].'/hmti-web');
} else {
  define('BASE_URL', 'http://'.$_SERVER['SERVER_ADDR'].'/hmti-web');
}
define('LIB_PATH', BASE_PATH.'/core/libs');
define('RESOURCE', BASE_URL.'/core/public/resource');

// Progrez Fox API
define('PROGREZ_USERKEY', 'H267SLBZNK0Y9UT38WV68EQFRJ9DVG8174XOEYDQ72E6MXYKJJFHMVM23K5OP2EM');
define('PROGREZ_TOKENPROJECT', 'mzqyDvmPQPIEZaYSnajpcfX2xyHWS923');