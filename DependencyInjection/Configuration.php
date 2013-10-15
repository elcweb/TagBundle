<?php

namespace Elcweb\TagBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('elcweb_tag');

        $rootNode
            ->children()
                ->arrayNode('model')
                    ->isRequired()
                    ->cannotBeEmpty()
                    ->children()
                        ->scalarNode('tag_class')->isRequired()->cannotBeEmpty()
                            ->defaultValue('Elcweb\TagBundle\Entity\Tag')
                            ->end()
                        ->scalarNode('tagging_class')->isRequired()->cannotBeEmpty()
                            ->defaultValue('Elcweb\TagBundle\Entity\Tagging')
                            ->end()
                    ->end()
                ->end()
                ->arrayNode('service')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('slugifier')->defaultValue('fpn_tag.slugifier.default')->cannotBeEmpty()->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
