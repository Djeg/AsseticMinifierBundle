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

use DavidJegat\AsseticMinifierBundle\Minifier\Cssmin;

class CssMinTest extends \PHPUnit_Framework_TestCase
{

	/**
	 * Test the minify css
	 */
	public function testMinify()
	{
		$css = <<<EOD
/* some comment */
.foo {
	margin:0;
	padding:0;
}
EOD;
		$min = new Cssmin();

		$this->assertEquals('.foo{margin:0;padding:0}', $min->run($css));

	}

}