<?php

namespace Mira\Project;

class Project
{
    public $providers;

    public static function config($config_name = false)
    {
        if (!$config_name) {
            return include $_SERVER['DOCUMENT_ROOT']."/config/config.php";
        } else {
            $config = include $_SERVER['DOCUMENT_ROOT']."/config/config.php";
            if (isset($config[$config_name])) {
                return $config[$config_name];
            }
            return false;
        }
    }

    public function setProviders($providers)
    {
        $this->providers = $providers;
        return true;
    }
}
