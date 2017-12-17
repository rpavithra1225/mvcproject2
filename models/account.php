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


    //to find a users tasks you need to create a method here.  Use $this->id to get the usersID For the query
    public static function findTasks(){

        //I am temporarily putting a findall here but you should add a method to todos that takes the USER ID and returns their tasks.
        $records = todos::findAll();
        return $records;
    }
    //add a method to compare the passwords this is where bcrypt should be done and it should return TRUE / FALSE for login


    public function validate()
    {
        $err = '';
        $err .= \utility\modelHelper::validateDate($this->birthday);
        $err .= \utility\modelHelper::validateEmail($this->email);
        $err .= \utility\modelHelper::validateText($this->fname);
        $err .= \utility\modelHelper::validateText($this->lname);
        $err .= \utility\modelHelper::validateNum($this->phone);
        $err .= \utility\modelHelper::validateNum($this->gender);
        $err .= \utility\modelHelper::validatePassword($this->password);

        return $err;
    }

     public function checkPassword($LoginPassword) {
        return password_verify($LoginPassword, $this->password);
            //hash_equals($this->password,crypt($LoginPassword,$this->password));
    }

}


?>
