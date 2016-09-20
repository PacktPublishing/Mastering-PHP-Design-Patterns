<?php

/**
 * User: Junade Ali
 * Date: 20/03/2016
 * Time: 02:23
 */
class BurgerLazyLoader
{
    private static $instances = array();

    public static function getBurger(bool $cheese, bool $chips): Burger
    {
        if (!isset(self::$instances[$cheese . $chips])) {
            self::$instances[$cheese . $chips] = new Burger($cheese, $chips);
        }

        return self::$instances[$cheese . $chips];
    }

    public static function getBurgerCount(): int
    {
        return count(self::$instances);
    }
}