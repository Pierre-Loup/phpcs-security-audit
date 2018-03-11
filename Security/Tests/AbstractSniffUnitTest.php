<?php
/**
 * An abstract class that all sniff unit tests must extend.
 *
 * @license   https://github.com/FloeDesignTechnologies/phpcs-security-audit/blob/master/LICENSE GPLv3 
 */

namespace PHPCS_SecurityAudit\Tests;

use PHP_CodeSniffer\Tests\Standards\AbstractSniffUnitTest as PHPCSAbstractSniffUnitTest;

abstract class AbstractSniffUnitTest extends PHPCSAbstractSniffUnitTest
{


    /**
     * Sets up this unit test.
     *
     * @return void
     */
    protected function setUp()
    {
        $class          = get_class($this);
        $this->testsDir = __DIR__.'/';
        $this->standardsDir = __DIR__.'/../';

    }//end setUp()
    

}//end class
