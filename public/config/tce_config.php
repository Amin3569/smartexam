<?php

// --- INCLUDE FILES -----------------------------------------------------------

require_once('../config/tce_auth.php');
require_once('../../shared/config/tce_config.php');

// --- DEFAULT META TAGS -------------------------------------------------------

/**
 * Default site name.
 */
define('K_SITE_TITLE', 'Smart Exam');

/**
 * Default site description.
 */
define('K_SITE_DESCRIPTION', 'Smart Exam');

/**
 * Default site author.
 */
define('K_SITE_AUTHOR', 'Amin Beshir');

/**
 * Default html reply-to meta tag.
 */
define('K_SITE_REPLY', ''); //

/**
 * Default keywords.
 */
define('K_SITE_KEYWORDS', 'SmartExam, eExam, e-exam, web, exam');

/**
 * Path to default html icon.
 */
define('K_SITE_ICON', '../../favicon.ico');

/**
 * Theme for the public area
 */
define('K_PUBLIC_THEME', 'default');

/**
 * Path to public CSS stylesheet for LTR languages.
 */
define('K_SITE_STYLE', K_PATH_STYLE_SHEETS.K_PUBLIC_THEME.'.css');

/**
 * Path to CSS stylesheet for RTL languages.
 */
define('K_SITE_STYLE_RTL', K_PATH_STYLE_SHEETS.K_PUBLIC_THEME.'_rtl.css');

// --- OPTIONS / COSTANTS ------------------------------------------------------

/**
 * Max number of rows to display in tables.
 */
define('K_MAX_ROWS_PER_PAGE', 50);

/**
 * Max file size to be uploaded [bytes].
 */
define('K_MAX_UPLOAD_SIZE', 1000000);

/**
 * Max memory limit for a PHP script.
 */
define('K_MAX_MEMORY_LIMIT', '32M');

/**
 * Main page (homepage).
 */
define('K_MAIN_PAGE', 'index.php');

/**
 * Enable PDF results on public area.
 */
define('K_ENABLE_PUBLIC_PDF', true);

/**
 * If true hide the expired tests from index table.
 */
define('K_HIDE_EXPIRED_TESTS', false);

// --- INCLUDE FILES -----------------------------------------------------------

require_once('../../shared/config/tce_db_config.php');
require_once('../../shared/code/tce_db_connect.php');
require_once('../../shared/code/tce_functions_general.php');

// --- PHP SETTINGS ------------------------------------------------------------

ini_set('memory_limit', K_MAX_MEMORY_LIMIT); // set PHP memory limit
ini_set('session.use_trans_sid', 0); // if =1 use PHPSESSID (for clients that do not support cookies)

//============================================================+
// END OF FILE
//============================================================+
