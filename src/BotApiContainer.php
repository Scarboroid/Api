<?php

namespace TelegramBot\Api;

class BotApiContainer
{
    protected static $instance;

    public static function setInstance(BotApi $instance)
    {
        static::$instance = $instance;
    }

    public static function getInstance()
    {
        return static::$instance;
    }
}
