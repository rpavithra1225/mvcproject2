<?php

namespace utility;
//namespace MyProject\mvcName;

class accountsControllerHelper
{
    public static function setPassword($password) {

        $password = password_hash($password, PASSWORD_DEFAULT);
        return $password;

    }

    public static function save($user) {

        $user->email = $_POST['email'];
        $user->fname = $_POST['fname'];
        $user->lname = $_POST['lname'];
        $user->phone = $_POST['phone'];
        $user->birthday = $_POST['birthday'];
        $user->gender = $_POST['gender'];
        $user->password = \utility\accountsControllerHelper::setPassword($_POST['password']);
        $user->save();
        return $user;
    }

    public static function trimDate($date) {
        date_default_timezone_set("Asia/Bangkok");
        $date = new \DateTime($date);
        $strip = $date->format('Y-m-d');
        return $strip;
    }
}
