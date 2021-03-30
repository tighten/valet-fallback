<?php

use App\Site;
use Illuminate\Support\Facades\Route;
use Valet\Site as ValetSite;

Route::get('/', function () {
    $site = app(ValetSite::class);

    $linked = $site->links()->groupBy(function ($site) {
        return $site['path'];
    })->map(function ($links) {
        return new Site($links->first()['path'], $links);
    });

    $parked = $site->parked()->filter(function ($site) {
        return in_array($site['site'], ['audiovisual', 'symposium', 'ram', 'postit', 'novapackages', 'karani']);
    })->groupBy(function ($site) {
        return $site['path'];
    })->map(function ($links) {
        return new Site($links->first()['path'], $links);
    });

    dd($linked, $parked);

    // return view('home', [
    //     'linked' => $linked,
    //     'parked' => $parked,
    // ]);
});
