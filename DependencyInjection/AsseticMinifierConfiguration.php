<?php
/**
 * This file is a part of AsseticMinifier. Please read the 
 * LICENSE or README.md files for more informations about
 * this software.
 *
 * @author david jegat <david.jegat@gmail.com>
 * @link https://github.com/davidjegat/AsseticMinifier
 */

namespace DavidJegat\AsseticMinifierBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Configure the AsseticMinifier
 * 
 * @author david jegat <david.jegat@gmail.com>
 */
class AsseticMinifierConfiguration implements ConfigurationInterface
{
	/**
	 * Get the Configuration TreeBuilder
	 * 
	 * @return TreeBuilder
	 */
	public function getConfigTreeBuilder()
	{
		$treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('davidjegat_asseticminifier');

        return $treeBuilder;
	}
} 