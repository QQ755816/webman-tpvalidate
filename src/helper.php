<?php

declare(strict_types=1);


if (!function_exists('lang')) {
    function lang(string $set, string $lang = null)
    {
        //前台传递es-lang作为语言参数 按照你自己的修改 
        $langset = $lang ?: request()->header('es-lang') ?: env('SYSTEM_LOCAL', 'zh-cn');
        return trans($set, [], null, $langset);
    }
}

if (!function_exists('env')) {
    function env($env, $default = '')
    {
        return getenv($env) ?: $default;
    }
}