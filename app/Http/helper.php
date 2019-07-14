<?php

if (!function_exists('ad__pending_count')) {
    function ad__pending_count()
    {
        // dd(App\Ad::all());
        return App\Ad::where('statu', '=', 1)->count();
    }
}

/* if (!function_exists('active_menu')) {
    function active_menu($link)
    {
        if (preg_match('/' . $link . '/i', Request::segment(2))) {
            return ['menu-open', 'display:block'];
        } else {
            return ['', ''];
        }
    }
} */
