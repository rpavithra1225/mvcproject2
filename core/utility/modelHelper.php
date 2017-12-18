<?php

namespace utility;

class modelHelper
{
    public static function getValidation($data){
        if($data != '' ) {
            echo '<br>Failed validation. The reason is:'.$data;
            exit;
        }
    }

    public static function validatePassword($pwd){

            $err='';
            if( !preg_match("#[0-9]+#", $pwd) ) {
                $err .= "<br> Password must include at least one number! ";
            }

            if( !preg_match("#[a-z]+#", $pwd) ) {
                $err .= "<br> Password must include at least one letter! ";
            }

            if(strlen($pwd)<6){
                $err.= "<br> Password is too short";
            }
        return $err;
    }

    public static function validateDate($duedate)
    {
        $err = '';
        if (!preg_match("/^[0-9]{4}-[0-9]{1,2}-[0-9]{1,2}$/", $duedate)) {
            $err .= "<br> The format of the date should be YYYY-MM-DD";
        }
        return $err;
    }

    public static function checkName($fname,$lname){
        $err = '';
        if ($fname == $lname) {
            $err .= "<br> First name cannot be same as last name";
        }
        return $err;
    }

    public static function checkDateValidity($duedate,$createddate)
    {
        $err = '';
        date_default_timezone_set("Asia/Bangkok");
        if(strtotime($duedate) < strtotime($createddate)){
            $err.= "<br> Enter a valid due date. Due datemust be greater than created date";
        }
        return $err;
    }

    public static function validateNum($num){
            $err='';
            if(!ctype_digit($num)){
                $err ="<br> The phone number should be all digits";
            }
         return $err;
    }
    public static function validateText($text){
        $err='';
        if (!ctype_alpha($text)){
           $err ="<br> The name should be all characters ";
        }
        return $err;
    }

    public static function validateGender($gender){

        $err='';
        $values = array('Male','male','female','Female');
        if(!in_array($gender,$values)){
            $err ="<br> Enter valid entry male or female";
        }
        return $err;
    }

    public static function validateEmail($email){

        $err='';
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $err ="<br> Enter valid email address";
        }
        return $err;
    }

    public static function validateIsdone($isdone){
        $err='';
        $values = array('0','1');

        if(!in_array($isdone,$values)){
            $err ="<br> Enter valid entry 0 or 1";
        }
        return $err;
    }

    public static function validateMessage($message){
        $err='';
        if(empty($message)){
            $err ="<br> Enter valid message";
        }
        return $err;
    }

}