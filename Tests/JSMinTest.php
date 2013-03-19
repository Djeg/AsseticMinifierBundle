<?php
/**
 * This file is a part of AsseticMinifierBundle. Please read the 
 * LICENSE or README.md files for more informations about
 * this software.
 *
 * @author david jegat <david.jegat@gmail.com>
 * @link https://github.com/davidjegat/AsseticMinifierBundle
 */

namespace DavidJegat\AsseticMinifierBundle\Tests;

use DavidJegat\AsseticMinifierBundle\Minifier\JSMin;

class JSMinTest extends \PHPUnit_Framework_TestCase
{

	/**
	 * Test the JSMin
	 */
	public function testMinify()
	{
		$js = <<<EOD
/*
Some comment
*/
var x = function() {
	// some coment
	return true;
}
EOD;

		$this->assertEquals('var x=function(){return true;}', JSMin::minify($js));
	}

}