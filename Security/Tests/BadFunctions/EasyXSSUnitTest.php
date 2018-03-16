<?php
/**
 * Unit test class for the EasyXSS sniff.
 *
 * @license   https://github.com/FloeDesignTechnologies/phpcs-security-audit/blob/master/LICENSE GPLv3 
 */

namespace PHPCS_SecurityAudit\Tests\BadFunctions;

use PHPCS_SecurityAudit\Tests\AbstractSniffUnitTest;

class EasyXSSUnitTest extends AbstractSniffUnitTest
{

    /**
     * Get a list of CLI values to set before the file is tested.
     *
     * @param string                  $testFile The name of the file being tested.
     * @param \PHP_CodeSniffer\Config $config   The config data for the test run.
     *
     * @return void
     */
    public function setCliValues($testFile, $config)
    {
        
        if ($testFile === 'EasyXSSUnitTest.1.inc') {
            \PHP_CodeSniffer\Config::setConfigData('ParanoiaMode', 0);
        } else {
            \PHP_CodeSniffer\Config::setConfigData('ParanoiaMode', 1);
        }

    }//end setCliValues()

    /**
     * Returns the lines where errors should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of errors that should occur on that line.
     *
     * @return array<int, int>
     */
    public function getErrorList($testFile="EasyXSSUnitTest.1.inc")
    {
        $errors = [
            4 => 1,
            5 => 1,
            6 => 1,
            9 => 1,
            10 => 1,
            13 => 1
        ];
        
        return $errors;

    }//end getErrorList()


    /**
     * Returns the lines where warnings should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of warnings that should occur on that line.
     *
     * @return array<int, int>
     */
    public function getWarningList($testFile="EasyXSSUnitTest.1.inc")
    {
        switch ($testFile) {
        case 'EasyXSSUnitTest.1.inc':
            return [];
            break;
        case 'EasyXSSUnitTest.2.inc':
            return [
                4 => 1,
                7 => 1,
                8 => 1,
                9 => 1,
                10 => 1,
                11 => 1,
                13 => 1
            ];
            break;
        default:
            return [];
            break;
        }

    }//end getWarningList()


}//end class
