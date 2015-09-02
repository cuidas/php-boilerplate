<?php
/**
 * Created by PhpStorm.
 * User: bastard
 * Date: 02.09.15
 * Time: 22:19
 */

namespace Cuidas;


class App
{

    /**
     * @var App
     */
    private static $app;

    function run()
    {
        echo 'foo';
    }

    public static function getInstance()
    {
        return isset(self::$app) ? self::$app : self::$app = new App();
    }
}