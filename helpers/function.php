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