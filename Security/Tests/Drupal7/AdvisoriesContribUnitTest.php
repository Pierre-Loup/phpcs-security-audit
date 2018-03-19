<?php
/**
 * Unit test class for the AdvisoriesContrib sniff.
 *
 * @license   https://github.com/FloeDesignTechnologies/phpcs-security-audit/blob/master/LICENSE GPLv3 
 */

namespace PHPCS_SecurityAudit\Tests\Drupal7;

use PHPCS_SecurityAudit\Tests\AbstractSniffUnitTest;

class AdvisoriesContribUnitTest extends AbstractSniffUnitTest
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
     * Returns the lines where errors should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of errors that should occur on that line.
     *
     * @return array<int, int>
     */
    public function getErrorList()
    {  
        return [
            1 => 1
        ];

    }//end getErrorList()


    /**
     * Returns the lines where warnings should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of warnings that should occur on that line.
     *
     * @return array<int, int>
     */
    public function getWarningList()
    {
        return [];
        
    }//end getWarningList()


}//end class
