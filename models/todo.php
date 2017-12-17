<?php

final class todo extends database\model
{
    public $id;
    public $owneremail;
    public $ownerid;
    public $createddate;
    public $duedate;
    public $message;
    public $isdone;
    protected static $modelName = 'todo';

    public static function getTablename()
    {

        $tableName = 'todos';
        return $tableName;
    }

    public function validate()
    {
        $err = '';

        $err .= \utility\modelHelper::validateEmail($this->owneremail);
        $err .= \utility\modelHelper::validateDate($this->duedate);
        $err .= \utility\modelHelper::validateIsdone($this->isdone);
        $err .= \utility\modelHelper::validateMessage($this->message);

        return $err;
    }
}

?>
