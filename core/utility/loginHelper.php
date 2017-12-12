<?php

namespace utility;
//namespace MyProject\mvcName;

class htmlTable
{
    public function setPassword($password) {

        $password = crypt($password);
        return $password;

    }

    public function checkPassword($LoginPassword) {

        return hash_equals($this->password,crypt($LoginPassword,$this->password));


    }
}
