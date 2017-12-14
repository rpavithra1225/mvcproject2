<?php

namespace utility;
//namespace MyProject\mvcName;

class loginHelper
{
    public static function setPassword($password) {

        $password = password_hash($password, PASSWORD_DEFAULT);
        return $password;

    }
}
