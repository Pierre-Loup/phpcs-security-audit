<?php
/**
 * Unit test class for the DbQueryAC sniff.
 *
 * @license   https://github.com/FloeDesignTechnologies/phpcs-security-audit/blob/master/LICENSE GPLv3 
 */

namespace PHPCS_SecurityAudit\Tests\Drupal7;

use PHPCS_SecurityAudit\Tests\AbstractSniffUnitTest;

class DbQueryACUnitTest extends AbstractSniffUnitTest
{
    
    /**
     * Sets up this unit test.
     *
     * @return void
     */
    protected function setUp()
    {
        parent::setUp();
        \PHP_CodeSniffer\Config::setConfigData('CmsFramework', 'Drupal7', true);
        
    }//end setUp()

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
        if ($testFile === 'DbQueryACUnitTest.1.inc') {
            \PHP_CodeSniffer\Config::setConfigData('ParanoiaMode', 0, true);
        } else {
            \PHP_CodeSniffer\Config::setConfigData('ParanoiaMode', 1, true);
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
    public function getErrorList()
    {  
        return [];

    }//end getErrorList()


    /**
     * Returns the lines where warnings should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of warnings that should occur on that line.
     *
     * @return array<int, int>
     */
    public function getWarningList($testFile="DbQueryACUnitTest.1.inc")
    {
        switch ($testFile) {
        case 'DbQueryACUnitTest.1.inc':
            return [
                3 => 1
            ];
            break;
        case 'DbQueryACUnitTest.2.inc':
            return [
                3 => 1
            ];
            break;
        default:
            return [];
            break;
        }
        
    }//end getWarningList()


}//end class
