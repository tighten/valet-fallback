<?php

use App\Site;
use App\SiteManager;
use Illuminate\Support\Facades\Route;
use Valet\Site as ValetSite;

Route::get('/', function () {
    $site = app(ValetSite::class);
    $siteManager = new SiteManager;

    $linked = $site->links()->groupBy(function ($site) {
        return $site['path'];
    })->map(function ($links) use ($siteManager) {
        return $siteManager->site($links->first()['path'], $links);
    });

    $parked = $site->parked()->filter(function ($site) {
        return in_array($site['site'], ['audiovisual', 'symposium', 'ram', 'postit', 'novapackages']);
    })->groupBy(function ($site) {
        return $site['path'];
    })->map(function ($links) use ($siteManager) {
        return $siteManager->site($links->first()['path'], $links);
    });

    return view('home', [
        'linked' => $linked,
        'parked' => $parked,
    ]);
});
Route::get('{site}/secure', function ($site) {
    $tld = Configuration::read()['tld'];
    $url = $site . '.' . $tld;
    $site = app(ValetSite::class);
    $site->secure($url);
})->name('sites.secure');
