<?php
/**
 * Bootstrap file for unit tests.
 *
 * @license   https://github.com/FloeDesignTechnologies/phpcs-security-audit/blob/master/LICENSE GPLv3 
 */

require 'vendor/autoload.php';
require 'vendor/squizlabs/php_codesniffer/tests/Standards/AbstractSniffUnitTest.php';
require 'vendor/squizlabs/php_codesniffer/autoload.php';

$GLOBALS['PHP_CODESNIFFER_STANDARD_DIRS'] = [];
$GLOBALS['PHP_CODESNIFFER_TEST_DIRS']     = [];
$GLOBALS['PHP_CODESNIFFER_SNIFF_CODES']   = [];
$GLOBALS['PHP_CODESNIFFER_FIXABLE_CODES'] = [];

$tokens = new \PHP_CodeSniffer\Util\Tokens();

if (defined('PHP_CODESNIFFER_IN_TESTS') === false) {
    define('PHP_CODESNIFFER_IN_TESTS', true);
}

if (defined('PHP_CODESNIFFER_CBF') === false) {
    define('PHP_CODESNIFFER_CBF', false);
}

if (defined('PHP_CODESNIFFER_VERBOSITY') === false) {
    define('PHP_CODESNIFFER_VERBOSITY', 0);
}
