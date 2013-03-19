<?php
/**
 * This file is a part of AsseticMinifier. Please read the 
 * LICENSE or README.md files for more informations about
 * this software.
 *
 * @author david jegat <david.jegat@gmail.com>
 * @link https://github.com/davidjegat/AsseticMinifier
 */

namespace DavidJegat\AsseticMinifierBundle\AsseticFilter;

use Assetic\Asset\AssetInterface;
use Assetic\Filter\FilterInterface;
use DavidJegat\AsseticMinifierBundle\Minifier\JSMin;

class AsseticMinifierJsFilter implements FilterInterface
{

	public function filterLoad(AssetInterface $asset)
	{

	}

	public function filterDump(AssetInterface $asset)
	{
		$content = $asset->getContent();

		$asset->setContent(JSMin::minify($content));
	}

}