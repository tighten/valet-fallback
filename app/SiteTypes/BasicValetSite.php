<?php

namespace App\SiteTypes;

use App\Site;
use BasicValetDriver;

class BasicValetSite extends Site
{
    protected static $driver = BasicValetDriver::class;
}
