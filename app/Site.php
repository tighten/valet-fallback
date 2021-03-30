<?php

namespace App;

use Illuminate\Support\Facades\File;
use ValetDriver;

class Site
{
    protected $path;
    protected $links;

    public function __construct(string $path, $links)
    {
        $this->path = $path;
        $this->links = collect($links)->mapInto(Link::class);
    }

    public function name()
    {
        return $this->links->first()->name();
    }

    public function driver()
    {
        return ValetDriver::assign($this->path, $this->name(), $this->links->first()->url());
    }

    public function composerFile()
    {
        $composerPath = $this->path . '/composer.json';

        if (! File::exists($composerPath)) {
            return null;
        }

        return json_decode(File::get($composerPath));
    }

    public function minimumPhpVersion()
    {
        return data_get($this->composerFile(), 'require.php');
    }
}
