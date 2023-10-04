<?php

namespace App;

use Illuminate\Support\Facades\File;

abstract class Site
{
    protected $path;

    protected $links;

    protected $abstract;

    protected static $driver;

    public function __construct(string $path, $links)
    {
        $this->path = $path;
        $this->links = collect($links)->mapInto(Link::class);
    }

    public static function driver()
    {
        return static::$driver;
    }

    public function name()
    {
        return basename($this->path);
    }

    public function composerFile()
    {
        $composerPath = $this->path.'/composer.json';

        if (! File::exists($composerPath)) {
            return null;
        }

        return json_decode(File::get($composerPath));
    }

    public function minimumPhpVersion()
    {
        return data_get($this->composerFile(), 'require.php');
    }

    public function links()
    {
        return $this->links;
    }
}
