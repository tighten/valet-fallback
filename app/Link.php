<?php

namespace App;

class Link
{
    protected $site;
    protected $secured;
    protected $url;
    protected $path;

    public function __construct(array $link)
    {
        $this->site = $link['site'];
        $this->secured = ! empty($link['secured']);
        $this->url = $link['url'];
        $this->path = $link['path'];
    }

    public function name()
    {
        return $this->site;
    }

    public function url()
    {
        return $this->url;
    }

    public function path()
    {
        return $this->path;
    }

    public function secured()
    {
        return $this->secured;
    }
}
