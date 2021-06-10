<?php

namespace App;

use App\SiteTypes\BasicValetSite;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Symfony\Component\Finder\SplFileInfo;
use ValetDriver;

class SiteManager
{
    protected $driversToTypes = [];

    public function __construct()
    {
        $this->driversToTypes = collect(File::allFiles(app_path('SiteTypes')))->mapWithKeys(function (SplFileInfo $file) {
            $fileName = $file->getFilenameWithoutExtension();
            $className = "App\\SiteTypes\\{$fileName}";

            return [$className::driver() => $className];
        });
    }

    public function site(string $path, $links)
    {
        $siteDriver = $this->siteDriver($path, $links);

        $siteType = Arr::get($this->driversToTypes, get_class($siteDriver), BasicValetSite::class);

        return new $siteType($path, $links);
    }

    public function siteDriver(string $path, $links)
    {
        return ValetDriver::assign($path, basename($path), $links[0]['url']);
    }
}
