<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PyrrahOpenWeatherMapConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $apiKey;
    private $apiUrl;
    private $units;
    private $language;
    private $_usedProperties = [];
    
    /**
     * @default '54ff5e6d101f47a209eb103fa879df4f'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function apiKey($value): static
    {
        $this->_usedProperties['apiKey'] = true;
        $this->apiKey = $value;
    
        return $this;
    }
    
    /**
     * @default 'https://api.openweathermap.org/data/2.5/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function apiUrl($value): static
    {
        $this->_usedProperties['apiUrl'] = true;
        $this->apiUrl = $value;
    
        return $this;
    }
    
    /**
     * @default 'metric'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function units($value): static
    {
        $this->_usedProperties['units'] = true;
        $this->units = $value;
    
        return $this;
    }
    
    /**
     * @default 'en'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function language($value): static
    {
        $this->_usedProperties['language'] = true;
        $this->language = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'pyrrah_open_weather_map';
    }
    
    public function __construct(array $value = [])
    {
        if (array_key_exists('api_key', $value)) {
            $this->_usedProperties['apiKey'] = true;
            $this->apiKey = $value['api_key'];
            unset($value['api_key']);
        }
    
        if (array_key_exists('api_url', $value)) {
            $this->_usedProperties['apiUrl'] = true;
            $this->apiUrl = $value['api_url'];
            unset($value['api_url']);
        }
    
        if (array_key_exists('units', $value)) {
            $this->_usedProperties['units'] = true;
            $this->units = $value['units'];
            unset($value['units']);
        }
    
        if (array_key_exists('language', $value)) {
            $this->_usedProperties['language'] = true;
            $this->language = $value['language'];
            unset($value['language']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['apiKey'])) {
            $output['api_key'] = $this->apiKey;
        }
        if (isset($this->_usedProperties['apiUrl'])) {
            $output['api_url'] = $this->apiUrl;
        }
        if (isset($this->_usedProperties['units'])) {
            $output['units'] = $this->units;
        }
        if (isset($this->_usedProperties['language'])) {
            $output['language'] = $this->language;
        }
    
        return $output;
    }

}
