<?php namespace JayJay\Classes;

class Configuration
{

    /**
     * @param $key
     * @return mixed
     */
    public static function getValue($key)
    {
        /**
         * Load file from configuration
         */
        $configuration = static::loadConfigurationFile($key);

        /**
         * Ignore the first key because this is the file
         */
        $keys = array_slice(explode('.', $key),1);

        /**
         * Get the value from the configuration
         */
        $value = static::getValueFromConfigurationArray($keys, $configuration);

        /**
         * Return the value
         */
        return $value;
    }

    /**
     * @param $key
     * @return mixed
     */
    private static function loadConfigurationFile($key)
    {
        /**
         * Get the first key from the string. File will be loaded from the config directory.
         */
        $fileName = explode('.', $key)[0];

        /**
         * Return loaded file as array
         */
        return require_once('config/' . $fileName . '.php');
    }

    /**
     * @param $keys
     * @param $configuration
     * @return mixed
     */
    private static function getValueFromConfigurationArray($keys, $configuration)
    {
        foreach($keys as $key)
        {
            
        }
    }
}