<?php


namespace App;

use App\Util\StringUtil;

abstract class AbstractEnum
{
    private static $cache = [];

    public static function getLabel(int $neededvalue)
    {
        foreach (self::getConstans() as $name => $value) {
            if($value === $neededvalue) {
                return StringUtil::humanize($name);
            }
        }
    }

    private static function getConstans()
    {
        if(!isset(self::$cache[static::class])) {
            $reflector = new \ReflectionClass(static::class);
            self::$cache[static::class] = $reflector->getConstants();
        }

        return self::$cache[static::class];
    }
}