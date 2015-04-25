<?php namespace Acme\LaravelApi;

use System\Classes\PluginBase;
use Illuminate\Foundation\AliasLoader;

/**
 * LaravelApi Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Laravel API',
            'description' => 'Example API using Laravel Controllers',
            'author'      => 'Acme',
            'icon'        => 'icon-leaf'
        ];
    }

    public function boot()
    {
        $alias = AliasLoader::getInstance();
        $alias->alias('Inspiring', 'Illuminate\Foundation\Inspiring');
    }

}
