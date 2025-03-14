<?php

/**
 * @return \App\Services\ServerAPI
 */
function serverAPI()
{
    return app(\App\Services\ServerAPI::class);
}

function page_title($title)
{
    view()->share('page_title', $title);
}

function assetImage($url)
{
    if ($url) {
        return 'https://admin.songda11thanglong.com' . $url;
    }
    return $url;
}

function langCurrent()
{
    return request()->attributes->get('lang_locale', 'vi');
}

function langId()
{
    if (langCurrent() === 'vi') {
        return 1;
    }

    return 2;
}

function localeRoute($lang, $name, $parameters = [], $absolute = true)
{
    $name = $lang . '.' . $name;

//    $parameters = [
//        ... $parameters,
//        'locale' => $lang,
//    ];

    return route($name, $parameters, $absolute);
}

function autoRoute($name, $parameters = [], $absolute = true)
{
    return localeRoute(langCurrent(), $name, $parameters, $absolute);
}