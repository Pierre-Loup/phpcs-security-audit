<?php
/**
 * Unit test class for the AdvisoriesCore sniff.
 *
 * @license   https://github.com/FloeDesignTechnologies/phpcs-security-audit/blob/master/LICENSE GPLv3 
 */

namespace PHPCS_SecurityAudit\Tests\Drupal7;

use PHPCS_SecurityAudit\Tests\AbstractSniffUnitTest;

class AdvisoriesCoreUnitTest extends AbstractSniffUnitTest
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
     * Get a list of all test files to check.
     *
     * These will have the same base as the sniff name but different extensions.
     * We ignore the .php file as it is the class.
     *
     * @param string $testFileBase The base path that the unit tests files will have.
     *
     * @return string[]
     */
    protected function getTestFiles($testFileBase)
    {
        $testFiles = [];

        $dir = substr($testFileBase, 0, strrpos($testFileBase, DIRECTORY_SEPARATOR));
        $testFile = $dir.'/AdvisoriesCoreUnitTest/includes/bootstrap.inc';
        return [$testFile];

    }//end getTestFiles()
    
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
            11 => 1
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
