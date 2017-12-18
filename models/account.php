<?php

final class account extends \database\model
{
    public $id;
    public $email;
    public $fname;
    public $lname;
    public $phone;
    public $birthday;
    public $gender;
    public $password;
    protected static $modelName = 'account';

    public static function getTablename()
    {
        $tableName = 'accounts';
        return $tableName;
    }

    /*abstract method enforced by the parent class : Model*/

    public function validate()
    {
        $err = '';
        $err .= \utility\modelHelper::validateDate($this->birthday);
        $err .= \utility\modelHelper::validateEmail($this->email);
        $err .= \utility\modelHelper::validateText($this->fname);
        $err .= \utility\modelHelper::validateText($this->lname);
        $err .= \utility\modelHelper::checkName($this->fname,$this->lname);
        $err .= \utility\modelHelper::validateNum($this->phone);
        $err .= \utility\modelHelper::validateGender($this->gender);
        $err .= \utility\modelHelper::validatePassword($this->password);

        return $err;
    }

     public function checkPassword($LoginPassword) {
        return hash_equals($this->password,crypt($LoginPassword,$this->password));
    }

}


?>
