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

    /**
     * Return the folder name/slug; e.g. "symposium";
     * this will be the same for every link on the same site
     */
    public function name(): string
    {
        return $this->site;
    }

    /**
     * Fully-qualified URL; e.g. https://symposium.test/
     */
    public function url(): string
    {
        return $this->url;
    }

    /**
     * Absolute path; e.g. /home/mattstauffer/Sites/symposium
     */
    public function path(): string
    {
        return $this->path;
    }

    /**
     * Whether the site is secured
     */
    public function secured(): bool
    {
        return $this->secured;
    }
}
