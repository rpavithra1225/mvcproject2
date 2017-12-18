<?php

namespace utility;

class controllerHelper
{
    public static function setPassword($password) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        return $password;

    }

    public static function setSessionVariables($user){
        session_start();
        $_SESSION["userID"] = $user->id;
        $_SESSION['email']=$user->email;
    }

    public static function getSessionID(){
        session_start();
        return $_SESSION["userID"];
    }
    public static function getHeader($str){
        header("$str");
    }
    public static function save($user) {

        $user->email = $_POST['email'];
        $user->fname = $_POST['fname'];
        $user->lname = $_POST['lname'];
        $user->phone = $_POST['phone'];
        $user->birthday = $_POST['birthday'];
        $user->gender = $_POST['gender'];

        $oldPassword='';
        if(isset($user->password)){$oldPassword = $user->password;}
        $newPassword = $_POST['password'];

        if($oldPassword != $newPassword) {
            $user->password = \utility\controllerHelper::setPassword($_POST['password']);
        }

        $user->save();
        return $user;
    }

    public static function todoSave($todo){
        session_start();
        $todo->owneremail = $_SESSION['email'];
        $todo->ownerid = $_SESSION['userID'];
        $todo->duedate = $_POST['duedate'];
        $todo->message = $_POST['message'];
        $todo->isdone = $_POST['isdone'];
        $todo->save();
    }

    public static function trimDate($date) {
        date_default_timezone_set("Asia/Bangkok");
        $date = new \DateTime($date);
        $strip = $date->format('Y-m-d');
        return $strip;
    }

    public static function getRecordWithTrimmedDates($record){
        $record->createddate = \utility\controllerHelper::trimDate($record->createddate);
        $record->duedate = \utility\controllerHelper::trimDate($record->duedate);
        return $record;
    }

    public static function getCurrentDate() {
        date_default_timezone_set("Asia/Bangkok");
        return date('Y-m-d');;
    }
}
