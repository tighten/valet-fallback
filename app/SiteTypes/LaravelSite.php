<?php

namespace App\SiteTypes;

use App\Site;
use LaravelValetDriver;

class LaravelSite extends Site
{
    protected static $driver = LaravelValetDriver::class;

    public function laravelVersionConstraint()
    {
        return data_get($this->composerFile(), 'require.laravel/framework');
    }
}
