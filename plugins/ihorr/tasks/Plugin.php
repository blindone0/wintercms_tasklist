<?php namespace Ihorr\Tasks;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Ihorr\Tasks\Components\Tasks' => 'tasksLook'
        ];
    }

    public function registerSettings()
    {
    }
}
