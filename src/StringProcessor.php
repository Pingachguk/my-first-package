<?php

declare(strict_types=1);

namespace Pingachguk\MyFirstPackage;

/**
 * @author Pingachguk
 */
class StringProcessor
{
    public static function getLength(string $text): int
    {
        return strlen($text);
    }
}