<?php
/**
 * Unit test class for the FilesystemFunctions sniff.
 *
 * @license   https://github.com/FloeDesignTechnologies/phpcs-security-audit/blob/master/LICENSE GPLv3 
 */

namespace PHPCS_SecurityAudit\Tests\BadFunctions;

use PHPCS_SecurityAudit\Tests\AbstractSniffUnitTest;

class FilesystemFunctionsUnitTest extends AbstractSniffUnitTest
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
        
        if ($testFile === 'FilesystemFunctionsUnitTest.1.inc') {
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
    public function getErrorList($testFile="FilesystemFunctionsUnitTest.1.inc")
    {
        $errors = [
            5 => 1
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
    public function getWarningList($testFile="FilesystemFunctionsUnitTest.1.inc")
    {
        return [
            4 => 2
        ];

    }//end getWarningList()


}//end class
