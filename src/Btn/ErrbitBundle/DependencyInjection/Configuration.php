<?php

namespace Btn\ErrbitBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('btn_errbit');

        $rootNode
            ->children()
                ->scalarNode('api_key')->end()
                ->scalarNode('enabled')->end()
                ->scalarNode('host')->end()
                ->scalarNode('port')->end()
                ->scalarNode('environment_name')->end()
                ->arrayNode('exceptions')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->booleanNode('not_found_http')->defaultValue(true)->end()
                        ->booleanNode('resource_not_found')->defaultValue(true)->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
