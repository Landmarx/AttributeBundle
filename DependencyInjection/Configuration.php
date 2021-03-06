<?php
namespace Landmarx\Bundle\AttributeBundle\DependencyInjection;

use \Symfony\Component\Config\Definition\Builder\TreeBuilder;

class Configuration implements \Symfony\Component\Config\Definition\ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('landmarx_attribute');

        return $treeBuilder;
    }
}
