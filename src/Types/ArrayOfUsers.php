<?php

namespace TelegramBot\Api\Types;

abstract class ArrayOfUsers
{
    public static function fromResponse($data)
    {
        $users = [];
        foreach ($data as $user) {
            $users[] = User::fromResponse($user);
        }

        return $users;
    }
}
