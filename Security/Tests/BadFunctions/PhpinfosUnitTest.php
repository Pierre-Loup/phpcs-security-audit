<?php
/**
 * Unit test class for the Phpinfos sniff.
 *
 * @license   https://github.com/FloeDesignTechnologies/phpcs-security-audit/blob/master/LICENSE GPLv3 
 */

namespace PHPCS_SecurityAudit\Tests\BadFunctions;

use PHPCS_SecurityAudit\Tests\AbstractSniffUnitTest;

class PhpinfosUnitTest extends AbstractSniffUnitTest
{

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
    public function getWarningList()
    {
        return [
            3 => 1
        ];
        
    }//end getWarningList()


}//end class
