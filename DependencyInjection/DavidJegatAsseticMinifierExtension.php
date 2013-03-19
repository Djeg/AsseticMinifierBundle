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

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * Dependency Injection for the CMASBUndle
 * 
 * @author david jegat <david.jegat@gmail.com>
 */
class DavidJegatAsseticMinifierExtension extends Extension
{
	/**
	 * @{inheritDoc}
	 */
	public function load(array $configs, ContainerBuilder $container)
	{
		$configuration = new AsseticMinifierConfiguration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
	}
}