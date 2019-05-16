<?php


namespace App\Util;


final class StringUtil
{
    private function __construct()
    {
    }

    /**
     * Converting delivery method to a usable form
     *
     * @param string $str
     * @return string
     */
    public static function humanize(string $str): string
    {
        return \ucfirst(\strtolower(\str_replace('_', ' ', $str)));
    }
}