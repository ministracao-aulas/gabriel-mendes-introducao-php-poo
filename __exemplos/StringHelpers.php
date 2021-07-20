<?php

class StringHelpers
{
    public static function lower(string $string, string $glue = '', string $string2 = '')
    {
        return strtolower($string.$glue.$string2);
    }

    public static function lowerJoin(...$args)
    {
        $joined  = strtolower(implode($args));
        $cleared = self::removeSpecialChars($joined);
        return $cleared;
    }

    public static function removeSpecialChars(string $string)
    {
        return str_replace(
            ['Ç', 'ç', 'Ã', 'ã'],
            ['C', 'c', 'A', 'a'],
            $string);
    }

    public static function replaceAll(array $replace_this, string $to_this, string $string)
    {
        return str_replace(
            $replace_this,
            $to_this,
            $string);
    }
}

echo StringHelpers::lower('ALGO').PHP_EOL;
echo StringHelpers::lower('ALGO', '-', 'Ola').PHP_EOL;
echo StringHelpers::lower('ALGO','zzzzzzzzzzzzz').PHP_EOL;
echo StringHelpers::lowerJoin('convenção','---', 'ssss', ',', 'sdsdsd').PHP_EOL;
echo StringHelpers::removeSpecialChars('convenção').PHP_EOL;
echo StringHelpers::replaceAll(['a', 'e', 'n'], 'X', 'convenção').PHP_EOL;

//Como exemplo, validar palavras inadequadas de um chat
echo str_replace(['aaa', 'uuuu', 'iii'], '****', 'eu uuuu vc aaa').PHP_EOL;


