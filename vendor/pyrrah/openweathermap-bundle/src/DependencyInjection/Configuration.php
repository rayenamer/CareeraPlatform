<?php

namespace Pyrrah\OpenWeatherMapBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('pyrrah_open_weather_map');

        if (method_exists($treeBuilder, 'getRootNode')) {
            $rootNode = $treeBuilder->getRootNode();
        } else {
            $rootNode = $treeBuilder->root('pyrrah_open_weather_map');
        }

        $rootNode
                ->children()
                    ->scalarNode('api_key')->defaultValue('54ff5e6d101f47a209eb103fa879df4f')->end()
                    ->scalarNode('api_url')->defaultValue('https://api.openweathermap.org/data/2.5/')->end()
                    ->scalarNode('units')->defaultValue('metric')->end()
                    ->scalarNode('language')->defaultValue('en')->end()
                ->end();

        return $treeBuilder;
    }
}
