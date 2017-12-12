<?php

namespace utility;
//namespace MyProject\mvcName;

class loginHelper
{
    public static function setPassword($password) {

        $password = crypt($password);
        return $password;

    }
}
