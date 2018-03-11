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


    /**
     * Returns the lines where errors should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of errors that should occur on that line.
     *
     * @return array<int, int>
     */
    abstract protected function getErrorList();


    /**
     * Returns the lines where warnings should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of warnings that should occur on that line.
     *
     * @return array<int, int>
     */
    abstract protected function getWarningList();


}//end class
